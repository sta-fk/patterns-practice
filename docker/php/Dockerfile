FROM php:8.2-fpm-alpine

RUN addgroup -g 1000 -S app && \
    adduser -u 1000 -S app -G app

RUN apk add \
    autoconf \
    build-base \
    git

RUN pecl install apcu-5.1.21
RUN docker-php-ext-enable apcu opcache
WORKDIR /var/www

CMD ["php-fpm"]
