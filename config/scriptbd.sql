
CREATE DATABASE ufgdgamecup;

USE ufgdgamecup;



CREATE TABLE equipes(
	id integer auto_increment primary key,
	nome varchar(100) unique not null,
	data_cadastro timestamp default CURRENT_TIMESTAMP,

	pago boolean default false,
	data_pagamento timestamp	
);

CREATE TABLE usuarios(
	id integer auto_increment primary key,
	nome varchar(100) not null,
	email varchar(100) not null,
	fone varchar(25) not null,
	fone2 varchar(25),
	cpf varchar(15) not null,
	data_cadastro timestamp default CURRENT_TIMESTAMP,
	equipe integer,
	lider boolean default false,
	pago boolean default false,
	data_pagamento timestamp,
	foreign key (equipe) references equipes(id)
);