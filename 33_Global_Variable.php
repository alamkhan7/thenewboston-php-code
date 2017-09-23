<?php
// return user ip address


function echo_ip(){
	/* To access global variable declare inside function as global variable */
	global $user_ip ;
	echo 'Your ip address is ' .$user_ip ;
}
// $user_ip is global variable
$user_ip=$_SERVER['REMOTE_ADDR'] ;

echo_ip();
?>