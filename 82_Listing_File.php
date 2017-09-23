<?php
// Read directory in list all the file

$directory = 'Files' ;

// actually we read 'Files/'
$handle = opendir($directory.'/') ;

if ($handle) {
	echo "Looking inside '" .$directory ."'<br>";

	// now read the $handle
	while ($file = readdir($handle) ) {
		if ($file != '.' && $file!='..'){
			// To create link for a file
			echo '<a href="' . $directory . '/' . $file . '">' .$file.'<br>';
			// <a href="Files/FileName"> FileName <br>
			// To dispaly image <img src="iles/FileName" > fileName 
		}
	}
}
?>