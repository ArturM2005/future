FROM php:8.2-fpm

RUN apt-get update && apt-get install -y libpng-dev libjpeg62-turbo-dev libfreetype6-dev libzip-dev git unzip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd zip pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN chown -R www-data:www-data /var/www

EXPOSE 8000

CMD ["php-fpm"]