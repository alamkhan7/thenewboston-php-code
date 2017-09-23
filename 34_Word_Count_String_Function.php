<?php
$string = 'This is an example string & Hello World' ;

/* str_word_count three parameter */

/*Counting a word-> str_word_count($string,0) or str_word_count($string) */
$string_word_count = str_word_count($string) ;
echo $string_word_count . '<br>';

/* return as array  */
$string_word_count = str_word_count($string , 1) ;
print_r ($string_word_count);
echo '<br>';

/* return associative array with index value is position of the word */
$string_word_count = str_word_count($string , 2) ;
print_r ($string_word_count);
echo '<br>';

/*Third parameter as this will be the part of word or not
in this case & is also count as word*/
$string_word_count = str_word_count($string , 1 , '&') ;
print_r ($string_word_count);
echo '<br>';

?>