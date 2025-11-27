FROM php:8.3-fpm

ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

RUN apt-get update && \
    apt-get install -y libicu-dev && \
    docker-php-ext-install intl && \
    rm -rf /var/lib/apt/lists/*

RUN apt-get update && \
    apt-get install -y libzip-dev libicu-dev unzip && \
    docker-php-ext-install zip intl && \
    rm -rf /var/lib/apt/lists/*

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN groupadd -g 1000 chuongvq \
 && useradd -m -u 1000 -g 1000 -s /bin/bash chuongvq

WORKDIR /var/www/html/app

RUN chown -R chuongvq:chuongvq ./

USER chuongvq

EXPOSE 9000
