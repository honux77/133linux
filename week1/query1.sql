create database next_db;
create user 'next'@'localhost' identified by 'next0708';
grant all privileges on next_db.* TO 'next'@'localhost' WITH GRANT OPTION;
