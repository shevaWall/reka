#!/usr/bin/env sh

composer install

echo "Check DB!"
while ! php artisan migrate | grep -E "Nothing to migrate|Command Canceled"; do
  echo "Waiting for init db to complete..."
  sleep 2
done
echo "DB ready!"

php artisan key:generate
php artisan storage:link

php-fpm