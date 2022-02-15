create database rentcar;
use rentcar;

create table rent(
	id int not null auto_increment primary key,
	name varchar(500) not null,
	document varchar(100) not null,
	email varchar(255) not null,
	gama varchar(100) not null,
	start varchar(100) not null,
	end varchar(100) not null,
	created_at datetime not null
);