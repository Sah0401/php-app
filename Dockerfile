FROM php:8.2-apache

COPY index.php /var/www/html/index.php

EXPOSE 8080

RUN sed -i 's/80/8080/g' /etc/apache2/ports.conf && \
    sed -i 's/:80/:8080/g' /etc/apache2/sites-available/000-default.conf

RUN chgrp -R 0 /var/www/html && \
    chmod -R g=u /var/www/html

CMD ["apache2-foreground"]
