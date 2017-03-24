FROM php:7.0-apache

RUN apt-get update && apt-get install -y cron rsync apache2 supervisor sudo git wget
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# install mod_pagspeed
RUN wget https://dl-ssl.google.com/dl/linux/direct/mod-pagespeed-stable_current_amd64.deb \
	&& sudo dpkg -i mod-pagespeed-*.deb \
	&& apt-get -f install \
	&& service apache2 restart

COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf
RUN a2ensite 000-default.conf

EXPOSE 80 8080
WORKDIR /var/www/
VOLUME ["/var/www/", "/var/log/"]
CMD ["/usr/bin/supervisord"]