# Use official PHP image with Apache
FROM php:8.2-apache

# Install required PHP extensions for MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite (optional, remove if not needed)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy your PHP files into the container
COPY . .

# Set correct file permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose Apache port
EXPOSE 80
