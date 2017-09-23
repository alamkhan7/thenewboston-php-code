<?php

// To keep track of current time and date
// time() return numerical value(integer)

$time = time() ;
// date (dispaly_format, $time)
$current_time = date('H:i:s' , $time) ;
echo $current_time."<br>";

// Modifying time stamp
// Display date before or after current date etc

// change a time back 1mnt
$ago_time = date('d:M:Y @ H:i:s' , $time - 60) ;
echo $ago_time."<br>";

// strtotime(String data)
// retrun time stamp
// strtotime ('+1 week') 
// return time stamp with 1 week second added with them
// or +1 year or +1 year 2 hours 30 seconds 


$ago_time = date('d:M:Y @ H:i:s' , strtotime('+1 week')) ;
echo $ago_time."<br>";
?>