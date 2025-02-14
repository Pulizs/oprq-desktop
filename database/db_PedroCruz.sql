create database db_oprq;
use db_oprq;

create table tb_adm(
	id bigint not null auto_increment,
    user varchar(255),
    senha varchar(20),
    primary key(id)
) ENGINE = InnoDB;

insert into tb_adm (user, senha)
values ('hostChemical', '3QPkGak23VF#');