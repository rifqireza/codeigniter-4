# Gunakan base image PHP dengan Apache
FROM php:8.1-apache

# Install ekstensi PHP
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    git \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    libicu-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-configure intl \
    && docker-php-ext-install gd mbstring zip mysqli pdo pdo_mysql intl \
    && a2enmod rewrite

# Salin konfigurasi Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory di dalam container
WORKDIR /var/www/html

# Salin file aplikasi CodeIgniter ke dalam container
COPY . .

# Install dependencies aplikasi melalui Composer
RUN composer install --no-dev --optimize-autoloader

# Ubah hak akses folder writable dan public
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/writable \
    && chmod -R 775 /var/www/html/public

# Expose port 80 untuk aplikasi
EXPOSE 80

# Jalankan Apache
CMD ["apache2-foreground"]
