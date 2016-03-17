
CREATE DATABASE ufgdgamecup;

USE ufgdgamecup;

CREATE TABLE usuarios(
	id integer auto_increment primary key,
	nome varchar(100) not null,
	email varchar(100) not null,
	fone varchar(100) not null,
	fone2 varchar(100),
	cpf varchar(11) not null,
	data_cadastro timestamp
);

CREATE TABLE equipes(
	id integer auto_increment primary key,
	nome varchar(100) not null,
	data_cadastro timestamp
);

CREATE TABLE usuario_da_equipe(
	usuario_id integer,
	equipe_id integer,
	lider boolean,

	primary key (usuario_id, equipe_id),
	foreign key (usuario_id) references usuarios(id),
	foreign key (equipe_id) references equipes(id)
);