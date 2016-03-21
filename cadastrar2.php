<?php
include 'model/Equipe.php';
/**
* CADATRA ESQUIPES PARA PALESTRAS E CAMPEONATO 
*
* ATUALIZAR: O PAPEL DESTE ARQUIVO DEVE SER TRASNFERIDO PARA O CONTROLLER, PARA ISSO
*			 DEVE SER IMPLEMENTADO SISTEMA DE ROTAS.
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
if(empty($_POST['nomeequipe']))
	$erros['nomeequipe']='Nome da equipe inválido.';

for($i=0; $i<5 ;$i++){
	if(empty($_POST['nome'.$i]))
		$erros['nome'.$i]='Nome participante '.$i.' inválido.';

	if(empty($_POST['email'.$i]))
		$erros['email'.$i]='Email participante '.$i.' inválido.';

	if(empty($_POST['cpf'.$i]))
		$erros['cpf'.$i]='CPF participante '.$i.' inválido.';

	if(empty($_POST['fone'.$i]))
		$erros['fone'.$i]='FONE participante '.$i.' inválido.';
}

//PREPARA RESPOSTA
if(!empty($erros)){
	$retorno['success'] =false;
	$retorno['erros']	=$erros;
}else{
	//SALVA DADOS NO BANCO 
	$equipe = new Equipe($_POST['nomeequipe']);
	for($i=0; $i<5 ;$i++){
		$userArray = array(
			'nome'	=> $_POST['nome'.$i],
			'email'	=> $_POST['email'.$i],
			'cpf'	=> $_POST['cpf'.$i],
			'fone'	=> $_POST['fone'.$i],
		);
		$usuario=new Usuario($userArray);
		$equipe->add($usuario);
	}
	$retorno = $equipe->salvar();
	//se salvou equipe prepara resposta
	if($retorno['success']){
		$retorno['idpdf']='equipe_'.$equipe->id;
	}

}

//ENVIA RESPOSTA
echo json_encode($retorno);
