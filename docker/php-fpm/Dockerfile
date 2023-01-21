FROM php:8.1-fpm-alpine

COPY ./conf.d $PHP_INI_DIR/conf.d

RUN docker-php-ext-install pdo pdo_mysql

RUN chmod 777 ./storage -R

WORKDIR /app