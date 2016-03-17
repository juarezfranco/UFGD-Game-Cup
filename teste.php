<?php
include 'model/Usuario.php';

$usuario = new Usuario();

$usuario->nome 	='Juarez';
$usuario->email ='juarezfrancojr@gmail.com';
$usuario->fone 	='(67) 9975-5532';
$usuario->cpf 	='051.825.371-66';

//SALVA DADOS NO BANCO 
$retorno = $usuario->salvar();

print_r(array_values($retorno));