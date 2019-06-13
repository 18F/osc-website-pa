#!/bin/sh
#
# This script will attempt to create the services required
# and then launch everything.
#

# If the user does not supply required data, generate some secrets.
# This works on OS X.  You may need to generate some random strings
# by hand if your distribution does not have the uuidgen utility on
# it.
NEW_CRON_KEY=$(uuidgen)
CRON_KEY=${CRON_KEY:-$NEW_CRON_KEY}

NEW_HASH_SALT=$(uuidgen)
HASH_SALT=${HASH_SALT:-$NEW_HASH_SALT}

NEW_ROOT_USER_PASS=$(uuidgen)
ROOT_USER_PASS=${ROOT_USER_PASS:-$NEW_ROOT_USER_PASS}

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

# wait until the db is fully provisioned
until cf create-service-key osc-database test-osc-db-ok ; do
	echo waiting until osc-database is live...
	sleep 10
done
cf delete-service-key osc-database test-osc-db-ok -f

# launch the apps
cf push

# tell people where to go
ROUTE=$(cf apps | grep osc-web | awk '{print $6}')

echo "to log into the osc-drupal site, you will want to go to https://${ROUTE}/user/login and use"
echo "USERNAME:  ${ROOT_USER_NAME}"
echo "PASSWORD:  ${ROOT_USER_PASS}"
echo "to get in.  Have fun!"
