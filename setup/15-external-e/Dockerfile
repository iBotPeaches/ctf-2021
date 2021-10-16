FROM php:7.4-alpine

ADD code /code
ADD cats /cats
ADD dogs /dogs
ADD flag /flag

WORKDIR /code

EXPOSE 8000
CMD php -S 0.0.0.0:8000