FROM php:fpm


RUN apt-get update \ 
    && apt-get install -y zlib1g-dev
#    && docker-php-ext-install zip


RUN apt-get update &&\
    apt-get install apt-utils curl gnupg cmake -y &&\
    mkdir /tmp/libzip && cd /tmp/libzip && curl -sSLO https://libzip.org/download/libzip-1.4.0.tar.gz &&\
    tar zxf libzip-1.4.0.tar.gz && cd libzip-1.4.0/ && mkdir build && cd build && cmake ../ &&\
    make > /dev/null && make install &&\
    docker-php-ext-configure zip --with-libzip=/usr/local/lib/libzip.so &&\
    docker-php-ext-install zip


RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php \
    && php -r "unlink('composer-setup.php');" \
    && mv composer.phar /usr/local/bin/composer


ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

RUN composer global require "laravel/installer"


RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql

RUN curl -sL https://deb.nodesource.com/setup_6.x | bash - \ 
    && apt-get update \
    && apt-get install -y nodejs
