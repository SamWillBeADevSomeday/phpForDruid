<?php
function palindrome($word) {

/*	recuperer la taille du string
			*/

	$word_len = strlen($word)-1;

/*  créer le mot inverse 
			*/

	$output ='';

	for($x=$word_len; $x>=0; $x--){
	$output=$word[$x];
}
/*	on verifie que le mot inverse est identique au mot entré en param
			*/
	if($output==$word){
	return true;
} else {
	return false;
}

}
?>