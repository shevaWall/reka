#!/usr/bin/env sh

echo "Check DB!"
while ! php artisan migrate | grep -E "Nothing to migrate|Command Canceled"; do
  echo "Waiting for init db to complete..."
  sleep 2
done
echo "DB ready!"

php-fpm
