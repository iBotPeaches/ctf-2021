FROM deminy/php-5.2

ADD flag /flag
ADD code /project

EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]