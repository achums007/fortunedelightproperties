FROM php:8.4-fpm-alpine

# Install the native PHP MySQL extensions required by Laravel
RUN docker-php-ext-install pdo pdo_mysql