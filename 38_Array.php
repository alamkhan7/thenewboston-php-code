<?php

$food  = array('Pasta' , 'Pizza' , 'Salad' );
$food[3] = 'Fruit' ;

for($i=0; $i<4; $i++){
	echo $food[$i] . '<br>' ;	
}

// To see all element and it's indexes of array 
print_r($food) . '<br>' ;
?>