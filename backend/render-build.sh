#!/usr/bin/env bash
set -e

echo "Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader

echo "Installing npm dependencies..."
npm ci

echo "Building assets..."
npm run build

echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Running migrations..."
php artisan migrate --force

echo "Creating storage link..."
php artisan storage:link || true

echo "Build completed!"
