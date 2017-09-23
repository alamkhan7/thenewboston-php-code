<?php
/* String function
str_shuffle(string)
strlen(string)
strrev(string)
similar_text(string1,string2,result)
*/

$string = 'Alam Khan' ;

/*Shuffle the string and create random string*/
$string_shuffle = str_shuffle($string) ;
echo $string_shuffle . '<br>';

$sub_string = substr($string_shuffle, 0 , 4) ;
echo $sub_string . '<br>';

echo 'Lenght of string is: '.strlen($string) . '<br>' ;

echo 'Reverse of Alam Khan : ' . strrev($string) . '<br>' ;

/*Compare string*/
// for parallisim
$string_one = 'This is my essay.I\'m going to be talking about php.' ;
$string_two= 'This is my essay. I will be talking about the subject php.' ;

// store percentage in $result
similar_text($string_one, $string_two , $result);
echo "The similarity b/w is, " . $result; 
?>