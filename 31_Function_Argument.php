<?php

$a = 5 ;
$b = 10 ;
function adder($a , $b){
	// a and b value is 25 and 20 not 5 and 10
	$result= $a + $b ;
	echo $a . ' + '. $b . ' = ' . $result;
}
$a = 25 ;
$b = 20 ;
adder($a , $b) ;
?>

