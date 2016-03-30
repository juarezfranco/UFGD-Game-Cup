<?php
include_once 'model/Equipe.php';
include_once 'lib/utils.php';
include_once 'lib/mpdf/mpdf.php';

$idpdf = $_GET['pdf'];
if(!$idpdf){
	die("Nenhum parametro foi passado");
}


//CRIA PDF DO FORMULÁRIO DA OPÇÃO 1
if(startsWith($idpdf,'usuario_')){
	//recupera id do usuario
	$id = substr($idpdf, strlen('usuario_'));
	$usuario = new Usuario();
	$usuario->id= decrypt($id);
	//le dados do banco
	$usuario->read();
	echo $id;
	echo decrypt($id);
	ob_start();
		include(__DIR__.'/resource/reports/FormularioOpcao1.php');
		$html = ob_get_contents();
	ob_end_clean();

	$mpdf=new mPDF();
	$mpdf->WriteHTML($html);
	$mpdf->Output();
	exit();

}

//CRIA PDF DO FORMULÁRIO DA OPÇÃO 2
if(startsWith($idpdf,'equipe_')){
	//recupera id da equipe
	$id = substr($idpdf, strlen ('equipe_'));
	$equipe = new Equipe();
	$equipe->id = decrypt($id);
	//le dados do banco
	$equipe->read();

	
	ob_start();
		include(__DIR__.'/resource/reports/FormularioOpcao2.php');
		$html = ob_get_contents();
	ob_end_clean();

	$mpdf=new mPDF();
	$mpdf->WriteHTML($html);
	$mpdf->Output();
	exit();

}
?>
