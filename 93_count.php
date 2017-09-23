<?php



function hit_count(){
	$ip_address = $_SERVER['REMOTE_ADDR'] ;
	$found = false ;

	$filename= '93_ip.txt' ;
	$ip_array = file('93_ip.txt') ;

	foreach ($ip_array as $ip) {
		$ip_single = trim($ip) ; 	// to remove white space

		// check if visitor ip is already exist or not in file	
		if ($ip_address == $ip_single)
			$found = true ;
	}

	if ($found == false){

		echo "IP Not Found<br>";
		$filename = '93_count.txt' ;

		// read current total ip from file
		$handle = fopen($filename, 'r') ;
		$current = fread($handle, filesize($filename)) ;
		fclose($handle);

		// update the count
		$current_inc = $current +1 ;
		$handle = fopen($filename, 'w') ;
		fwrite($handle, $current_inc) ;
		fclose($handle);

		// add ip address to file
		$handle = fopen('93_ip.txt', 'a') ;
		fwrite($handle, $ip_address."\n") ;
		fclose($handle);

	}
	else
		echo "IP Found<br>";
}
?>