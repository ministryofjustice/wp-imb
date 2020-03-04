#!/bin/bash
set -e

###
# Build Script
# Use this script to build theme assets,
# and perform any other build-time tasks.
##

# Install PHP dependencies (WordPress, plugins, etc.)
composer install

# Build theme assets here
cd web/app/themes/imb
npm install
npm run production
rm -rf node_modules
cd ../../../..
