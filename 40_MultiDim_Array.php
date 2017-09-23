<?php
/* Array inside array 

1)Healthy
	Salad
	Vegetable
	Pasta
2)Unhealthy
	Pizza
	ice cream

*/


$food  = array('Healthy'=>array
							('Salad' , 'Vegetable' , 'Pasta') , 
				'Unhealthy'=>array
							('Pizza' , 'Ice Cream')
			);


echo $food['Healthy'][2] . '<br>' ;
// $food['UnHealthy'][1] case sensitive
echo $food['Unhealthy'][1] . '<br>' ;

//Adding new element
$food['Normal'][0] = 'Fruit' ;
echo $food['Normal'][0] . '<br>' ;
?>