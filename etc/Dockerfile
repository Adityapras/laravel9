#
# PHP Dependencies
#
FROM composer as vendor

COPY database/ database/
COPY ./etc/docker/docker-entrypoint.sh docker-entrypoint.sh
COPY composer.json composer.json
COPY composer.lock composer.lock

RUN composer install \
	--ignore-platform-reqs \
	--no-interaction \
	--no-plugins \
	--no-scripts \
	--prefer-dist

#
# Frontend
#
FROM node:8.11 as frontend

RUN mkdir -p /app/public

COPY package.json webpack.mix.js /app/
COPY resources/ /app/resources/

WORKDIR /app

# RUN npm cache clean --force && npm install && npm run dev

#
# Application
#
FROM ubuntu:20.04
ENV DEBIAN_FRONTEND=noninteractive
WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    cron \
    nano \
    apache2 \
    libapache2-mod-fcgid

RUN apt-get update && apt-get install -y software-properties-common

RUN LC_ALL=C.UTF-8 add-apt-repository -y ppa:ondrej/php
# RUN apt-get update
# RUN apt-get install -y cron
# RUN apt-get install -y nano
# RUN apt-get install -y apache2
# RUN apt-get install libapache2-mod-fcgid

RUN a2enmod proxy
RUN a2enmod rewrite
RUN a2enmod proxy_fcgi


RUN apt-get update && apt-get install -y \
    php8.1-fpm \
    php8.1-dev \
    php8.1-redis \
    php8.1-curl \
    php8.1-mysql \
    php8.1-zip \
    php8.1-xml \
    php8.1-mbstring
# RUN apt-get update
# RUN apt-get install -y php8.1-fpm
# RUN apt-get install -y php8.1-dev
# RUN apt-get install -y php8.1-redis
# RUN apt-get install -y php8.1-curl
# RUN apt-get install -y php8.1-mysql
# RUN apt-get install -y php8.1-zip

RUN a2enconf php8.1-fpm

RUN apt-get update && apt-get install -y \
    python3-pip

# RUN apt-get update
# RUN apt-get -y install python3-pip
# RUN pecl install mongodb xlswriter 
# RUN echo "extension=mongodb.so" >> /etc/php/7.4/fpm/php.ini \
# 	&& echo "extension=xlswriter.so" >> /etc/php/7.4/fpm/php.ini

RUN apt-get install -y supervisor

# Set a volume mount point for your code
VOLUME /var/www/html

COPY . /var/www/html
# COPY ./etc/docker/supervisor/horizon.conf /etc/supervisor/conf.d/horizon.conf
COPY ./etc/docker/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY ./etc/docker/supervisor/apache2.conf /etc/supervisor/conf.d/apache2.conf
COPY ./etc/docker/supervisor/cron.conf /etc/supervisor/conf.d/cron.conf
# COPY ./etc/docker/supervisor/artisan.conf /etc/supervisor/conf.d/artisan.conf
COPY ./etc/docker/supervisor/supervisord.conf /etc/supervisor/supervisord.conf
COPY --from=vendor /app/docker-entrypoint.sh /var/www/tmp/docker-entrypoint.sh
COPY --from=vendor /app/vendor/ /var/www/html/vendor/
# COPY --from=frontend /app/public/js/ /var/www/html/public/js/
# COPY --from=frontend /app/public/css/ /var/www/html/public/css/
# COPY --from=frontend /app/mix-manifest.json /var/www/html/mix-manifest.json

# cron
COPY ./etc/crontab /etc/cron.d/crontab

USER root

RUN chmod 0644 /etc/cron.d/crontab
RUN crontab /etc/cron.d/crontab
RUN touch /var/log/cron.log

# Ensure the entrypoint file can be run
RUN chmod +x /var/www/tmp/docker-entrypoint.sh
# RUN mkdir /var/www/html/storage/logs/ && chown www-data:www-data /var/www/html/storage/logs
# RUN chmod -R 755 /var/www/html/storage/logs/
# ENTRYPOINT ["/var/www/tmp/docker-entrypoint.sh"]
# CMD service php8.1-fpm start && /usr/sbin/apache2ctl -D FOREGROUND && /usr/bin/supervisord -c /etc/supervisor/supervisord.conf && supervisord
ENTRYPOINT ["/var/www/tmp/docker-entrypoint.sh"]
# The default apache run command
# CMD ["apache2-foreground"]
EXPOSE 80
