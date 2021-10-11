FROM php:7.4-alpine

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo pdo_mysql

COPY --from=composer /usr/bin/composer /usr/bin/composer

ADD laravel30 /code
WORKDIR /code

RUN composer install --no-dev --ignore-platform-reqs

EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 -n