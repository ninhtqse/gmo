#!/bin/bash

# run scripts
pushd /var/www/html
  # Install & Update composer
  if [ -z "$(ls -A vendor)" ]; then
    composer install
  else
    composer update --no-plugins --no-scripts
  fi
  # Environment settings
  if [ ! -f .env ]; then
    # Copy file .env.example to .env
    cp .env.example .env
    # Create key material if necessary.
    php artisan key:generate
  fi
  # Migrations database
  php artisan migrate
  # Run script mysql
  php artisan script
popd

# start workspace process
exec "$@"