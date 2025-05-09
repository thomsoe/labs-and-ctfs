#!/bin/sh
find /var/www/html/images/uploads/ -type f -delete
cat >> /var/www/html/images/uploads/.htaccess << 'END'
php_flag engine off
Options -ExecCGI

<FilesMatch "^(?!.*\.(jpg|jpeg|png|gif|webp|svg|bmp|ico)$).*$">
    ForceType text/plain
</FilesMatch>
END
