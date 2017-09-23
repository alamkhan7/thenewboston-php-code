<?php
//Take three argument 1:Server Name 2:Username 3:password

$mysql_host = 'localhost' ;
$mysql_user = 'root' ;
$mysql_pass = ')(*LKJ' ;
$mysql_select_db = 'PHP_Tutorial' ;

// Connect to server
// mysql_connect($mysql_host, $mysql_user,$mysql_pass)  or die($conn_error) ;
// Connect to database
// mysql_select_db($mysql_select_db) or die($conn_error) ;
/*
if ( !$db=@mysqli_connect($mysql_host, $mysql_user,$mysql_pass,$mysql_select_db) ){
	die('Failed To Connected To Server<br>') ;
}
*/
$db = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $mysql_select_db);

	if(mysqli_connect_errno())
 	{
 		echo "Failed to connect to MySql: ".mysqli_connect_error();
 	}
 	else
 		echo "Conntect To PHP_Tutorail Database Done!<br><br>";
?>