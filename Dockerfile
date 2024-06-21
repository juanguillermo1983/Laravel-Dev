# Usa una imagen de PHP como base
FROM php:7.4-fpm

# Instala dependencias necesarias
RUN apt-get update \
    && apt-get install -y \
        libzip-dev \
        unzip \
        git \
        curl \
        nano \
    && docker-php-ext-install zip pdo_mysql

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configura la carpeta de trabajo
WORKDIR /var/www/html

# Copia el archivo de configuración de dependencias de Composer
#COPY composer.json composer.lock ./

# Instala las dependencias de Composer
#RUN composer install --no-scripts --no-autoloader

# Copia el resto de la aplicación
#COPY . .

# Genera el autoloading de Composer y realiza cualquier otra configuración necesaria
#RUN composer dump-autoload
#RUN php artisan key:generate

# Exponer el puerto 9000 para el servidor PHP-FPM
EXPOSE 9000

# Ejecuta PHP-FPM
#CMD ["php-fpm"]
