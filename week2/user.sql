create database next_db;
create user 'next'@'localhost' identified by 'next0708';
grant all privileges on next_db.* TO 'next'@'localhost' WITH GRANT OPTION;

use next_db;
create table message (
    id int primary key auto_increment,
    text varchar(255)
) default charset utf8;

insert into message(text) values ('Hello Linux!');
select * from message;
