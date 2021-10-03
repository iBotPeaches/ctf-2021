FROM php:7.4-alpine

ADD laravel /code
ADD flag /

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /code

RUN composer install --ignore-platform-reqs

EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 -n