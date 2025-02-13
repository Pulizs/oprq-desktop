create database db_PedroCruz;
use db_PedroCruz;

create table tb_supermercado(
	id bigint not null auto_increment,
    nome varchar(255),
    cnpj varchar(20),
    pagamentos_aceitos varchar(20),
    primary key(id)
) ENGINE = InnoDB;

insert into tb_supermercado (nome, cnpj, pagamentos_aceitos)
values ('supernoite', '1234', 'pix');