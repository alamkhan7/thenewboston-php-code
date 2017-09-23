<?php
// get_browser($agent,)
// Takes two Argument
// $agent = $_SERVER['HTTp_USER_AGENT']
// 2nd argument whatever return as array or not. True for Yes

$browser = get_browser(null , true) ;

// Now print the array to Find browser index in array 
// print_r($browser) ;

// echo $browser['browser']."<br>";
$browser = strtolower($browser['browser']) ;

if ($browser == 'chrome')
	echo "You are Using Google Chrome. <br>";
elseif ($browser == 'firefox')
	echo "You are Using Google Chrome. <br>";
else
	echo "You are Using other browser. <br>";
?>