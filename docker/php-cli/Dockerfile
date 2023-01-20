FROM php:8.1-cli-alpine

RUN apk update && apk add git bash

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php --  --install-dir=/usr/bin --filename=composer

WORKDIR /app