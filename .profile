#!/bin/sh
# this code is executed while initializing the app:
# https://docs.cloudfoundry.org/devguide/deploy-apps/deploy-app.html#profile

if [ -f /app/web/.htaccess ] ; then
  if [ -n "$S3_BUCKET" ] && [ -n "$S3_REGION" ]; then
    # Add Proxy rewrite rules to the top of the htaccess file
    sed -i "s/^#RewriteRule .s3fs/RewriteRule ^s3fs/" /app/web/.htaccess
  fi
else
  echo "cannot find .htaccess!"
  exit 1
fi

