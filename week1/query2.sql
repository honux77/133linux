use next_db;
create table message (
    id int primary key auto_increment,
    text varchar(255)
) default charset utf8;

insert into message(text) values ('Hello Linux!');
select * from message;
