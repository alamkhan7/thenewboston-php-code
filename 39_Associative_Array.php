<?php
/*Type of array in which you assign different type or names to indexes 
syntax:

$arrayName = array('index_name' => value );

*/

$food  = array('Pasta' => '300Calories' , 'Pizza' => '400Calories' , 'Salad' => '500Calories' );
$food['Fruit'] = '600Calories' ;

// To see all element and it's indexes of array 
print_r($food) . '<br>' ;
?>