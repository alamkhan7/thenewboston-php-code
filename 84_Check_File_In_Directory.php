<?php
// check file exis in directory or not
// e.g to change file name if some one upload to server

// Original File Name
// $filename_or = 'image.jpg' ;
// md5 create 32 bit charatcter from image.jpg
// $newname = rand(1,9) . md5($filename_or) . rand(1 , 9) ;
// Total character will be 34 because we append random number
// echo $newname;

// but there's also limitation assiging names to a file
// Now check for if the file is exist or not then perform some action
// file_exists(filename)

$filename = 'file.txt' ;
if (file_exists($filename)){
	echo "File already exist";
}
else{
	// File not exist so created one
	$handle = fopen($filename, 'w') ;
	fwrite($handle, 'Some Text') ;
	fclose($handle) ;
}




