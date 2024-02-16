#!/bin/bash

# Start PHP-FPM
php-fpm &

# Update dependencys for project
composer update &

# Create the key for application
php /var/www/artisan key:generate &

# Create tables in the database
php /var/www/artisan migrate &

# Run queue worker in the background
php /var/www/artisan queue:work --daemon &

# Run scheduler
while true; do
    php /var/www/artisan queue:work --daemon &
    php /var/www/artisan schedule:run --verbose --no-interaction &
    sleep 60
done

# Keep the container running
exec "$@"
