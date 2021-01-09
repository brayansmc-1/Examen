@echo off
START cd /xampp/htdocs/Talento2018

@echo off
php artisan down
php artisan cache:clear
php artisan config:cache
php artisan view:clear
php artisan up
php artisan serve
