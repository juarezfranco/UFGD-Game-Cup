<?php
include_once 'model/Equipe.php';
include_once 'lib/utils.php';
include_once 'lib/JasperPHP/JasperPHP.php';

$idpdf = $_GET['pdf'];
if(!$idpdf){
	die("Nenhum parametro foi passado");
}


//CRIA PDF DO FORMULÁRIO DA OPÇÃO 1
if(startsWith($idpdf,'usuario_')){
	//recupera id do usuario
	$id = substr($idpdf, strlen('usuario_'));
	$usuario = new Usuario();
	$usuario->id=$id;
	//le dados do banco
	$usuario->read();
	//typecast, transforma em array
	$params = array(
		'id'			=>$usuario->id,
		'nome'			=>$usuario->nome,
		'email'			=>$usuario->email,
		'cpf'			=>$usuario->cpf,
		'data_cadastro'	=>maskDate($usuario->data_cadastro),
		'fone'			=>$usuario->fone
	);
	

	$input 	= __DIR__.'/resource/reports/FormularioOpcao1.jasper';
	$output =   __DIR__.'/resource/reports/gerados/'.$idpdf;
	$file =$output.'.pdf';
	//cria pdf
	$jasper = new JasperPHP();
	$jasper->process(
		$input, 
		$output, 
		array("pdf"), 
		$params
	)->execute();
	
}

//CRIA PDF DO FORMULÁRIO DA OPÇÃO 2
if(startsWith($idpdf,'equipe_')){
	//recupera id da equipe
	$id = substr($idpdf, strlen ('equipe_'));
	$equipe = new Equipe();
	$equipe->id = $id;
	//le dados do banco
	$equipe->read();

	//cria parametros que vão para o pdf
	$params= array();
	$params['equipenome']=$equipe->nome;
	$params['id']=$equipe->id;
	$params['data_cadastro']=maskDate($equipe->data_cadastro);
	$cont=1;
	foreach ($equipe->jogadores as $jogador) {
		$params['nome'.$cont] =$jogador->nome;
		$params['cpf'.$cont] =$jogador->cpf;
		$params['email'.$cont] =$jogador->email;
		$params['fone'.$cont] =$jogador->fone;
		$cont++;
	}

	$input 	= __DIR__.'/resource/reports/FormularioOpcao2.jasper';
	$output =   __DIR__.'/resource/reports/gerados/'.$idpdf;
	$file =$output.'.pdf';
	//cria pdf
	$jasper = new JasperPHP();
	$jasper->process(
		$input, 
		$output, 
		array("pdf"), 
		$params
	)->execute();

}


if (! file_exists($file)) die("ERRO AO GERAR FOMULÁRIO PDF");
if (! is_readable($file)) die("ERRO AO LER PDF CRIADO");
header('Cache-Control: public'); 
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="formulario.pdf"');
header('Content-Length: '.filesize($file));

readfile($file);
unlink($file);//apaga pdf no servidor
?>
