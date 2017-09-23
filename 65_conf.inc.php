<?php
// This page contain dynamic variable which will contain ip address of 65_Get_Visitor_IP.php Page

// Get user IP Address
$ip_address = $_SERVER['REMOTE_ADDR'] ;

// List of IP address which you want to blocked
$ip_blocked = array ('::1' , '127.0.0.1') ;

?>