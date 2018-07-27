#!/bin/bash
set -e

###
# Build Script
# Use this script to build theme assets,
# and perform any other build-time tasks.
##

# Install PHP dependencies (WordPress, plugins, etc.)
composer install

# Build theme assets
cd web/app/themes/imb
npm install -g bower grunt-cli
npm install && bower install
grunt build

# Remove node_modules to (drastically) reduce image size
rm -Rf node_modules

cd ../../../..
