<?php

// Get Actual IP address Of user in shared Network
$http_ip_client = $_SERVER['HTTP_CLIENT_IP'] ;

// Get user ip if using proxy
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'] ;

// If user not using then the above variable will be empty

$remote_addr = $_SERVER['REMOTE_ADDR'] ;

if (!empty($http_ip_client))
	$ip_address = $http_ip_client ;
elseif(!empty($http_x_forwarded_for))
	$ip_address = $http_x_forwarded_for ;
else
	$ip_address = $remote_addr ;

echo $ip_address ."<br>";

?>