FROM centos:centos6.7

# Base Install
RUN rpm --rebuilddb && yum -y install yum-utils

# Base Apache, PHP
RUN rpm --rebuilddb && yum -y install --enablerepo=remi,remi-php53 \
  php \
  php-mysql \
  php-xml \
  php-pear \
  php-pdo \
  php-cli \
  php-mbstring \
  php-gd \
  php-mcrypt \
  php-devel \
  php-apc \
  httpd \
  mod_ssl \
  php* \
  && rm -rf /var/cache/yum/* \
  && yum clean all | true

ADD php.ini /usr/local/etc/php/

RUN echo "" >> /etc/httpd/conf/httpd.conf
RUN echo "ServerName localhost:80" >> /etc/httpd/conf/httpd.conf

ENTRYPOINT /usr/sbin/httpd -DFOREGROUND && /bin/bash
