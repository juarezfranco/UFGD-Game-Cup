<?php
include_once 'model/Usuario.php';

include_once 'lib/JasperPHP/JasperPHP.php';

/**
* CADATRA NAS PALESTRAS 
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
	if($retorno['success']){
		
		//gera pdf
		$data = getdate();
		$params = array(
			'id_inscricao'=>$usuario->id,
			'nome'=>$usuario->nome,
			'cpf' =>$usuario->cpf,
			'email' =>$usuario->email,
			'fone' =>$usuario->fone,
			'data_inscricao' => $data['mday'].'/'.$data['mon'].'/'.$data['year']
			);

		$input 	= __DIR__.'/resource/reports/FormularioOpcao1.jasper';
		$output =   __DIR__.'/resource/reports/gerados/'.$usuario->id;
		$jasper = new JasperPHP();

		$jasper->process(
			$input, 
			$output, 
			array("pdf"), 
			$params
		)->execute();
		$retorno['idpdf']=$usuario->id;
		
	}
}

//delay para teste
//sleep(0);

//ENVIA RESPOSTA
echo json_encode($retorno);

