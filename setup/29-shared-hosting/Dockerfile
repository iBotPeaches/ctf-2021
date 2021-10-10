FROM php:8.0-alpine

ADD laravel /code

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /code
RUN composer install --no-dev --ignore-platform-reqs

EXPOSE 8000
CMD php -S 0.0.0.0:8000