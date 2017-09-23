<?php
// Create User Login and Registeration System

require '135_connect.inc.php' ;
require '135_Return_Current_Page.inc.php' ;


if(loggedin())
{
	$firstname =get_user_field('firstname');
	$surname = get_user_field('surname') ;
	
	echo "Your are logged in, " . $firstname . " " . $surname . ". ";

	echo '<a href="135_Logout_Unset_Session.php">Logout </a> <br>' ;


}
else{
	// if user is not logged in then include the login page in index page
	include '135_Login_Form.inc.php' ;
}


?>