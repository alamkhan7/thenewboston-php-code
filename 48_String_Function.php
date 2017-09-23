<?php

//String position 3 arguments 
// 2 are required
// 1: string
// 2: keyword to search in string
// 3: offset from where to start search within string default 0
// return fisrt occurance position

$str = 'This is a string, and it is an example' ;

$offset=0 ;
while ($str_positoin = strpos($str , 'is' , $offset) ) 
{
	echo '\'is\' Fount it: ' .$str_positoin . '<br>' ;

	$offset = $str_positoin + 2 ;
	// 2 because 'is' = 2
}


// Replace part of string
// substr_replace(string, replacement, start)
// Four arguments
// 1: string 2:replace string 3:start position
// 4: end position
// return new string

$str = 'This part don\'t search. This part search' ;

echo substr_replace($str, 'Alam' ,29 , 4) . '<br> ';

// Replaing predefined part of a string
// str_replace(search word, replace word, string)
// 3 Argument 

$str ='This is a string, and is an example' ;
$find = array ('is' , 'string' , 'example') ;
$replce = array ('IS' , 'STRING' , 'EXAMPLE') ;
$new = str_replace($find, $replce , $str) ;
echo $new . "<br>";
?>