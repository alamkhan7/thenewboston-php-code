<?php
// Exceptional handling are to handle error in different way
// Usually to change flow of program or save current state of the program etc

function divide ($num1 , $num2){
	if ($num2== 0){
		
		//throw new Exception("Error Processing Request", 1);
		
		throw new Exception("Can't be divided by zero");
	}
	else
		return $num1 / $num2 ;
		
}

divide(5,0);


?>