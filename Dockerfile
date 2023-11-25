# Utiliza la imagen oficial de PHP 8.2.4
FROM php:8.2.4

# Instala las dependencias necesarias
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        libzip-dev \
        unzip \
        git \
    && docker-php-ext-install zip pdo_mysql \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establece el directorio de trabajo en el directorio de la aplicación
WORKDIR /var/www/html

# Copia el código de la aplicación al contenedor
COPY . /var/www/html

# Instala las dependencias de Composer
RUN composer install --no-interaction

# Inicia el servidor web de desarrollo de Laravel
CMD php artisan serve 