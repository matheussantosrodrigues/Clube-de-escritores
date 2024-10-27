create database secao;
use secao;
create table cadastro (
usuario varchar(35) not null,
senha char(8) not null,
idCad int auto_increment not null primary key
);
 
 select * from cadastro;
