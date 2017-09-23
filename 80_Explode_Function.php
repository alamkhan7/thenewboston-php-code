<?php
// Read data from file

$filename = 'names.txt' ;
$handle = fopen($filename, 'r') ;
$string = fread($handle, filesize($filename));

// To remove specific character
// explode(delimiter, string)
$name_array = explode(',' , $string) ;

foreach ($name_array as $name) {
	echo $name . '<br><br>';
}
?>