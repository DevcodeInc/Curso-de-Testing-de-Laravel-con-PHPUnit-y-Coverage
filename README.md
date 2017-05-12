Curso de testing con PHPUNIT en laravel

composer create-project laravel/laravel phpunit
cd /etc/apache2/sites-available
sudo nano phpunit.conf
sudo nano /etc/hosts
sudo a2ensite phpunit.conf
ln -s /home/s/trabajo/devcodela/phpunit/codigo/phpunit phpunit
sudo service apache2 reload
sudo cat /etc/apache2/sites-available/phpunit.conf 
composer update
sudo chmod 755 -R bootstrap/cache
sudo chmod 755 -R storage/logs/
sudo chown www-data:www-data -R bootstrap
sudo chown www-data:www-data -R storage/
php artisan key:generate