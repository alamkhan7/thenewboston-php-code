<?php
// unlink(filename) to delete file

if(@unlink('deletefile.txt') ){
	echo "File has been deleted<br>";
}
else{
	echo "File Not Exist<br>";
}

// rename(oldname, newname)

$filename = 'renamefile.txt' ;
$rand = rand(10000,99999) ;

if (rename($filename, $rand . '.txt') )
	echo 'File ' . $filename . ' Rename To ' . $rand . '.txt' ;
else
	echo "Error to raname a file";
?>