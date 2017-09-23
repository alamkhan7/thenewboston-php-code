<?php 

// try: try block of code if come across error
// then throw (call) exception and send the message to catch block
$age = 16 ;

try{

	if ($age > 18){
		echo "Old enough<br>";
	}
	else{
		throw new Exception('Not Old enough.<br>');
		
	}	
}

// The catch block pickup the error and give it variable name ($ex)
catch(Exception $ex){
	echo "Error: " . $ex->getMessage();
}


?>