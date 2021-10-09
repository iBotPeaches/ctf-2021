FROM php:7.3.31-alpine3.14

COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN composer create-project --prefer-dist laravel/laravel /laravel "8.4.2"

ADD flag /
ADD laravel /laravel
WORKDIR /laravel

RUN composer require --dev facade/ignition==2.5.1
RUN chmod u-w resources/views/fallback.blade.php

EXPOSE 8000
CMD ["php", "artisan", "serve", "--host", "0.0.0.0"]