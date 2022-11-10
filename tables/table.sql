create table users(
users_id int not null primary key auto_increment,
first_name varchar(25)not null,
last_name varchar(25)not null,
user_name varchar(20)not null unique,
address varchar(20)not null,
email varchar(15)not null unique,
password varchar(30),
confirm varchar(30));
