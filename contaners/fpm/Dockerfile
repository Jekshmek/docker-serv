FROM matriphe/alpine-php:fpm
MAINTAINER Jekshmek <yaroshjeka@gmail.com>

#RUN apt-get update && apt-get install -y \
#        libfreetype6-dev \
#        libjpeg62-turbo-dev \
#        libmcrypt-dev \
#        libpng-dev \
#    && docker-php-ext-install -j$(nproc) iconv mcrypt \
#    && pecl install mongodb \
#    && docker-php-ext-enable mongodb \
#    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
#    && docker-php-ext-install -j$(nproc) gd


#RUN docker-php-ext-install mbstring
#RUN docker-php-ext-install exif
#RUN docker-php-ext-install opcache
#RUN docker-php-ext-install pcntl
#RUN apt-get install -y libpq-dev \
#    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
#    && docker-php-ext-install pdo pdo_pgsql pgsql


ENV TIMEZONE Asia/Jakarta
ENV PHP_MEMORY_LIMIT 512M
ENV MAX_UPLOAD 50M
ENV PHP_MAX_FILE_UPLOAD 200
ENV PHP_MAX_POST 100M
EXPOSE 9001

#COPY conf/ /usr/local/etc/php-fpm.d/
#CMD ["php-fpm"]




 

