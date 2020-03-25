docker exec -it db.laravel.com /bin/sh -c "mysql -uroot -p1234 -hlocalhost -e 'CREATE DATABASE laravel'"
docker exec -it app.laravel.com php artisan voyager:install --with-dummy