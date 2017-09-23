<?php
/*
remove spacing from start and end
trim(str) , ltrim(str) , rtrim(str)

add slashes to escape character for security purpose
addslashes(str)
to remove slashes
stripslashes(str)

*/
$string1 = ' World ' ;
$string2 = 'hello'. $string1 ;
echo $string2.'<br>';

// remove space from string1
$trim_string = trim($string1) ;
$string2 = 'hello' . $trim_string.'<br>' ;
echo $string2;

$string1 = 'This is a <img src="image.jpg"> string' ;
$slashes_str1 = htmlentities(addslashes($string1)) ;
echo $slashes_str1;
?>