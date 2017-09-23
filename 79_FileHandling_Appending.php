<?php

$handle = fopen('names.txt', 'a') ;

fwrite($handle, "Appended Text " . "\n") ;
fclose($handle) ;

?>