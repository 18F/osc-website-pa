#!/bin/sh
#
# This script will attempt to clean up the osc drupal install in cloud.gov
#

# delete apps
cf delete osc-cronish
cf delete osc-web

# delete services
cf delete-service osc-database
cf delete-service osc-secrets
cf delete-service osc-storage

