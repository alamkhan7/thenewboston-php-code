<?php
// throw more then one exception
// and catch more exception


$mysql_host = 'localhost' ;
$mysql_user = 'root' ; 		// error
$mysql_pass = ')(*LKJ' ;
$mysql_select_db = 'PHP_Tutorial' ;

$age = 15 ;

class server_exception extends exception{}


/*
Modify the exception
Take every thing exception class and use it in our own class datave_exception
*/
class database_exception extends exception{}

try{
	if ( !@mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_select_db) ){
		throw new server_exception('Could not connect to server.<br>');
	}
	else if (0) {
		throw new database_exception("Sorry your are not old.<br>");
	}
	else{
		echo "Connected to database done.<br>";		
	}
}

catch(server_exception $ex){
	echo "Error: " . $ex->getMessage();

}

catch(database_exception $ex){
	echo "Error: ". $ex->getMessage();
}


?>