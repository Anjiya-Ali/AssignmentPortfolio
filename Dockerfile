# Use the official PHP image with Apache
FROM php:8.1-apache

# Copy the content of the current directory to /var/www/html/
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Expose port 80
EXPOSE 80

# Set file permissions (optional, but recommended for security)
RUN chown -R www-data:www-data /var/www/html

# Enable Apache mod_rewrite (optional, but useful for many PHP frameworks)
RUN a2enmod rewrite

# Install additional PHP extensions if needed (uncomment the next lines)
# RUN docker-php-ext-install pdo pdo_mysql

# Start the Apache server
CMD ["apache2-foreground"]
