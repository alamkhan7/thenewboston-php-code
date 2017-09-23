<?php
// Fird open the file
// w for writing to a file
// r for reading to a file
// a for appending to a file

// open file if not exist create it
$handle = fopen('Test.txt', 'w') ;

fwrite($handle, 'Hello This Is A Text.' . "\n") ;
fwrite($handle, "New line here.") ;
echo "Writing Done!";

fclose($handle) ;
?>