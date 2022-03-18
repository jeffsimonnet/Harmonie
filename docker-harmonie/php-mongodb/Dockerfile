#FROM dleviathan/php7.4-mongodb

FROM php:7.4-fpm

RUN apt-get update && apt-get -y install cron \
    autoconf pkg-config libssl-dev openssl libzip-dev libonig-dev zip unzip git vim coreutils\
    apt-utils gnupg libpng-dev libpq-dev libicu-dev libmagickwand-dev curl htop --no-install-recommends \
    && apt-get install -y zlib1g-dev libicu-dev g++ \
    && docker-php-ext-configure intl \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install intl pdo pdo_mysql gd mbstring gettext xml zip bcmath fileinfo ctype tokenizer json    

RUN pecl install mongodb-1.7.2 \
    && docker-php-ext-enable mongodb

RUN curl -sL https://deb.nodesource.com/setup_12.x | bash - \
    && apt-get install nodejs -y

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
