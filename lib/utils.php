<?php
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
?>