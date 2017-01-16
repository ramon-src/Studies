FROM debian:jessie

RUN apt-get update && apt-get -y install \
apache2 \
php5 \
php5-mysql \
php5-mcrypt \
libapache2-mod-php5 \
curl \
lynx-cur

RUN a2enmod php5
RUN a2enmod rewrite

ADD apache-config.conf /etc/apache2/sites-enabled/000-default.conf
ADD www /var/www/site

EXPOSE 80

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
