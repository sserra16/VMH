create database VMH;
use VMH;

create table usuario (
	id int auto_increment primary key,
    email varchar(250),
    senha varchar(250)
);