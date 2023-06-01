#!/usr/bin/env bash

set -e

env=${APP_ENV:-production}
queue=${USE_QUEUE:-yes}
scheduler=${USE_SCHEDULER:-yes}

if [ "$env" != "local" ]; then
    echo "Caching configuration..."
    (cd /var/www/html && php artisan config:cache && php artisan route:cache && php artisan view:cache)
fi

if [ "$queue" != "no" ]; then
    echo "Running the horizon..."
    php /var/www/html/artisan horizon
fi

if [ "$scheduler" != "no" ]; then
    while [ true ]
    do
      php /var/www/html/artisan schedule:run --verbose --no-interaction &
      sleep 60
    done
fi
