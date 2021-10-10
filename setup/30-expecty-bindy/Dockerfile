FROM php:7.4-alpine

COPY --from=composer /usr/bin/composer /usr/bin/composer

ADD laravel30 /code
WORKDIR /code

RUN touch database/database.sqlite
RUN composer install --no-dev --ignore-platform-reqs
RUN php artisan migrate -n

EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 -n