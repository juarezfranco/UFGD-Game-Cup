<?php
/**
* CADATRA NAS PALESTRAS 
**/

$erros 	= array();
$usuario= array();
$retorno= array();

//CASTING NOME
if(empty($_POST['nome']))
	$erros['nome']='Nome inválido.';
else
	$usuario['nome']=$_POST['nome'];

//CASTING EMAIL
if(empty($_POST['email']))
	$erros['email']='email inválido.';
else
	$usuario['email']=$_POST['email'];

//CASTING CPF
if(empty($_POST['cpf']))
	$erros['cpf']='cpf inválido.';
else
	$usuario['cpf']=$_POST['cpf'];

//CASTING FONE
if(empty($_POST['fone']))
	$erros['fone']='Fone inválido.';
else
	$usuario['fone']=$_POST['fone'];

//PREPARA RETORNO
if(!empty($erros)){
	$retorno['success'] =false;
	$retorno['erros']	=$erros;
}else{
	$retorno['success'] =true;
	$retorno['message']	='Cadastrado com sucesso!';
	//SALVA DADOS NO BANCO 
	//...
}

//delay para teste
sleep(6);

//ENVIA RESPOSTA
echo json_encode($retorno);
