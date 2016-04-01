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
	ob_start();
		include(__DIR__.'/resource/reports/FormularioOpcao1.php');
		$html = ob_get_contents();
	ob_end_clean();

	$name = str_replace('.', '', $usuario->cpf);
	$name = str_replace('-', '', $name);
	$filepath = 'resource/reports/gerados/cadastro1'.$name.'.pdf';
	
	$mpdf=new mPDF('A4');
	$mpdf->WriteHTML($html);
	$mpdf->Output($filepath ,'F');
	header('location:/resource/reports/gerados/cadastro1'.urlencode($name).'.pdf');

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

	$name = $equipe->jogadores[0]->cpf;
	$name = str_replace('.', '', $name);
	$name = str_replace('-', '', $name);
	$filepath = 'resource/reports/gerados/cadastro2'.$name.'.pdf';
	//instancia gerador de pdf
	$mpdf=new mPDF('A4');
	$mpdf->WriteHTML($html);
	//salva arquivo no caminho especificado $filepath
	$mpdf->Output($filepath ,'F');$mpdf->Output();
	//redireciona pagina para onde o arquivo foi salvo
	header('location:/resource/reports/gerados/cadastro2'.urlencode($name).'.pdf');
	exit();

}
?>
