#!/bin/bash

# sudo chgrp -R www-data /var/www/html/storage /var/www/html/bootstrap/cache
# sudo chmod -R ug+rwx /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 777 /var/www/html/storage/
chmod -R 777 /var/www/html/bootstrap/
# chmod -R 777 /var/www/html/public/company/
php artisan config:clear
php artisan key:generate
php artisan config:cache
# exec "$@"
exec /usr/bin/supervisord -c /etc/supervisor/supervisord.conf
