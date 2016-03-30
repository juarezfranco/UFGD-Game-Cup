<?php
include_once(__DIR__.'/aes.class.php');

/**
*	verifica se string começa com
*	http://stackoverflow.com/questions/834303/startswith-and-endswith-functions-in-php
* 	@author Salman A
*/
function startsWith($haystack, $needle) {
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
}

function endsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
}

function maskDate($timestamp){
	return date('d/m/Y',strtotime($timestamp));
}

function encrypt($msg){
	$file_path=__DIR__.'/../config/chavesimetrica.key';
	if(file_exists($file_path))
		$key = file_get_contents($file_path);
	else
		$key ="4edfff7fa3ae8655";//default

	$aes = new AES($key);

	$encode = $aes->encrypt($msg);

	return urlencode(base64_encode($encode));
}

function decrypt($encode){
	$file_path=__DIR__.'/../config/chavesimetrica.key';
	if(file_exists($file_path))
		$key = file_get_contents($file_path);
	else
		$key ="4edfff7fa3ae8655";

	$aes = new AES($key);

	$encode =urldecode(base64_decode($encode));
	$msg = $aes->decrypt($encode);

	return $msg;
}
?>