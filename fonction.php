<?php 
function comparelettre($l,$mot){
	for ($i=0; $i < strlen($mot); $i++) {
		if ($mot[$i]==$l) {
		 	return TRUE;
		 } 
	}
	return FALSE;
}
function getvoid($mot){
	$val;
	for ($i=0; $i < strlen($mot); $i++) { 
		$val[$i]='_';
	}
	return $val;
}
function verifval($mot,$val){
	for ($j=0; $j < strlen($mot); $j++) { 
		if ($mot[$j] != $val[$j]) {
			return FALSE;
		}
	}
	return TRUE;
}
function verifdouble($mot,$v,$l){
	for ($k=0; $k < strlen($mot); $k++) {
	if ($v[0]==$l[$k]) {
	 	return TRUE;
	 } 
	}
	return FALSE;
}
 ?>