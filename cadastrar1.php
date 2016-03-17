<?php
include 'model/Usuario.php';
/**
* CADATRA NAS PALESTRAS 
**/



//verifica se é requisição por post
if(empty($_POST)){
	header("location: index.php");
	exit;
}

//instancia variaveis que serão utilizadas
$erros 	= array();
$retorno= array();

//valida entradas
if(empty($_POST['nome']))
	$erros['nome']='Nome inválido.';

if(empty($_POST['email']))
	$erros['email']='email inválido.';

if(empty($_POST['cpf']))
	$erros['cpf']='cpf inválido.';

if(empty($_POST['fone']))
	$erros['fone']='Fone inválido.';

//PREPARA RESPOSTA
if(!empty($erros)){
	$retorno['success'] =false;
	$retorno['erros']	=$erros;
}else{
	//SALVA DADOS NO BANCO 
	$usuario = new Usuario($_POST);
	$retorno = $usuario->salvar();
	
	//GERAR PDF DO FORMULARIOO
	//...
}

//delay para teste
sleep(6);

//ENVIA RESPOSTA
echo json_encode($retorno);
