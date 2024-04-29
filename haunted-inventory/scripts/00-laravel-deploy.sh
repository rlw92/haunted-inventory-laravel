#!/usr/bin/env bash
echo "Running composer"
composer install --no-dev --working-dir=/var/www/html

echo "Running migrations..."
php artisan migrate --force

#echo "Running seeders..."
#php artisan db:seed

# echo "running image link"
# php artisan storage:link

echo "Artisant key"
php artisan key:generate --show

echo "Running vite..."
npm install
npm run build