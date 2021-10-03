FROM php:8.0-alpine

ADD laravel /code

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /code

RUN composer install --no-dev --ignore-platform-reqs

RUN touch database/database.sqlite
RUN php artisan migrate -n

EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 -n