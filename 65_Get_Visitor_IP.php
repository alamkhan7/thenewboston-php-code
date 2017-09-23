<?php
//It's not reliable Method
// Application : Block Specific IP address
// First Link with 65_conf.inc.php Page
// This will be a visitor page

require '65_conf.inc.php' ;

foreach ($ip_blocked as $ip) {
	if ($ip == $ip_address){
		die('Your ip address, ' . $ip . ' has been Blocked.') ;		// If this is user ip then close the page
	}
}

?>

<h1>Welcome!</h1>