<?php

$idpdf = $_GET['pdf'];
if(!$idpdf){
	die("Nenhum parametro foi passado");
}

$file = __DIR__.'/resource/reports/gerados/'.$idpdf.'.pdf';


if (! file_exists($file)) die("PDF Não existe");
if (! is_readable($file)) die("Não foi possível ler arquivo");


header('Cache-Control: public'); 
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="formulario.pdf"');
header('Content-Length: '.filesize($file));

readfile($file);
?>
