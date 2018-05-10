FROM nginx:latest
MAINTAINER Jekshmek <yaroshjeka@gmail.com>
RUN rm /etc/nginx/conf.d/*
COPY ./conf/default /etc/nginx/conf.d/
RUN chown -R www-data:www-data /var/www
