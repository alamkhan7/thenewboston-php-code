<?php
// Return current page which will be required in 135_Login_Form.php page

// Retrun current File name e.g output of the bellow statement is:  C:/xampp/htdocs/PHP_Tutorial/135_Create_User_Login_System.php
// $current_file = $_SERVER['SCRIPT_FILENAME'] ;

// output of the bellow statement is: /PHP_Tutorial/135_Create_User_Login_System.php

// Get Back To index page when user login
ob_start() ;
session_start() ;
$current_file = $_SERVER['SCRIPT_NAME'] ;

// for login or logout we need to return back to that page so save to location name
// This variable store the page name from which we comes
if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
	$http_referer = $_SERVER['HTTP_REFERER'] ;
}

function loggedin()
{
	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
		return true ;
	else
		return false ;
}

function get_user_field($field)
{
	global $db ;
	$id =  $_SESSION['user_id'] ;

	$query = "SELECT $field FROM users WHERE id='$id' " ;
	if($query_result = mysqli_query($db,$query) )
	{
		$record = mysqli_fetch_assoc($query_result) ;
		return ($record[$field]);
	}
}

?>