#!/bin/sh
#
# This script will attempt to create the services required
# and then launch everything.
#

# this function will generate a random string, or bail if uuidgen is not available.
generate_string()
{
  if [ -z "$1" ] ; then
    if command -v uuidgen >/dev/null ; then
      NEW_STRING=$(uuidgen)
      export NEW_STRING
    else
      echo "cannot find uuidgen utility:  You will need to generate some random strings and put them in the CRON_KEY, HASH_SALT, and ROOT_USER_PASS environment variables, then re-run this script."
      exit 1
    fi
  fi
}

# If the user does not supply required data, generate some secrets.
generate_string "$CRON_KEY"
CRON_KEY=${CRON_KEY:-$NEW_STRING}

generate_string "$HASH_SALT"
HASH_SALT=${HASH_SALT:-$NEW_STRING}

generate_string "$ROOT_USER_PASS"
ROOT_USER_PASS=${ROOT_USER_PASS:-$NEW_STRING}

ROOT_USER_NAME=${ROOT_USER_NAME:-root}


# function to check if a service exists
service_exists()
{
  cf service "$1" >/dev/null 2>&1
}

# create services (if needed)
if service_exists "osc-database" ; then
  echo osc-database already created
else
  cf create-service aws-rds medium-mysql osc-database
fi

if service_exists "osc-secrets" ; then
  echo osc-secrets already created
else
  yes '' | cf create-user-provided-service osc-secrets -p "{\"CRON_KEY\": \"$CRON_KEY\", \"HASH_SALT\": \"$HASH_SALT\", \"ROOT_USER_NAME\": \"$ROOT_USER_NAME\", \"ROOT_USER_PASS\": \"$ROOT_USER_PASS\"}"
fi

if service_exists "osc-storage" ; then
  echo osc-storage already created
else
  cf create-service s3 basic-sandbox osc-storage
fi

# create this to figure out where to set the s3 stuff
cf create-service-key osc-storage storagekey

# wait until the db is fully provisioned
until cf create-service-key osc-database test-osc-db-ok ; do
	echo waiting until osc-database is live...
	sleep 20
done
cf delete-service-key osc-database test-osc-db-ok -f

# launch the apps
cf push

# make sure that the app knows where it's s3fs stuff lives
S3INFO=$(cf service-key osc-storage storagekey)
S3_BUCKET=$(echo "$S3INFO" | grep '"bucket":' | sed 's/.*"bucket": "\(.*\)",/\1/')
S3_REGION=$(echo "$S3INFO" | grep '"region":' | sed 's/.*"region": "\(.*\)",/\1/')
cf set-env osc-web S3_BUCKET "$S3_BUCKET"
cf set-env osc-web S3_REGION "$S3_REGION"
cf delete-service-key osc-storage storagekey -f
cf restart osc-web

# tell people where to go
ROUTE=$(cf apps | grep osc-web | awk '{print $6}')
echo
echo
echo "  to log into the osc-drupal site, you will want to get the username/password from the output of these commands:"
echo "USERNAME:  cf e osc-web | grep ROOT_USER_NAME | sed 's/.*: \"\(.*\)\".*/\1/'"
echo "PASSWORD:  cf e osc-web | grep ROOT_USER_PASS | sed 's/.*: \"\(.*\)\".*/\1/'"
echo "  then go to https://${ROUTE}/user/login and login. Have fun!"
