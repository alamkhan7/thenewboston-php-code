<?php
/*Commonly loop through array*/

$food  = array('Healthy'=>array
							('Salad' , 'Vegetable' , 'Pasta') , 
				'Unhealthy'=>array
							('Pizza' , 'Ice Cream')
			);
// $element=Healthy and Unhealthy
// $inner_item store array
// $item = Salad , Vegetable etc

foreach ($food as $element => $inner_item) {
			echo '<strong>'. $element . '</strong>'.'<br>' ;
		foreach ($inner_item as $item){
			echo $item . '<br>' ;
		}	
			
		}		

?>