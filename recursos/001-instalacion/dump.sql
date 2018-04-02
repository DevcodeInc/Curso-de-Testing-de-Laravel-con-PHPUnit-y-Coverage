create database IF NOT EXISTS laravelAvanzado;
create user IF NOT EXISTS 'LAUser'@'localhost' identified by 'LAPass';
grant all privileges on laravelAvanzado.* to 'LAUser'@'localhost';
flush privileges;
