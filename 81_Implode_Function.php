<?php

$name_array = array('Alam' , 'Khan' , 'Qadar') ;
echo $name_array[0] . ' ' . $name_array[1] . ' ' . $name_array[2] . '<br>';
// Put someting b/w array element
$str = implode(', ', $name_array) ;

echo $str ;
?>