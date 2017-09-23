<?php
/*Match patteren inside string

preg_match() 
return 1 or 0*/

$str = 'This is a string' ;

if (preg_match('/is/', $str)) {	// check for 'is'
	echo 'Found <br>';
}
else
{
	echo 'Not Found<br>';
}

function has_space($string){
	if (preg_match('/ /', $string))		// check for space
		return 1;
	else
		return 0;
}

if (has_space('There\'snospace'))
	echo "Space Exist";
else
	echo "No Space Exist";
?>