create database secao;
use secao;
create table usuario (
usuario varchar(35) not null,
senha char(8) not null,
caminho varchar(255) not null,
email VARCHAR(254) NOT NULL,
idCad int auto_increment not null primary key
);
 
 select * from cadastro;
