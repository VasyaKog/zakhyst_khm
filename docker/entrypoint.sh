#!/bin/bash
set -e

echo "Running migrations..."
php artisan migrate --force

echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

echo "Seeding database..."
php artisan db:seed --force
php artisan cache:clear


echo "Copying seed images to storage..."
mkdir -p /var/www/html/storage/app/public/images
cp -r /var/www/html/public/images/* /var/www/html/storage/app/public/images/ || true
php artisan storage:link

echo "Starting Apache..."
exec apache2-foreground
