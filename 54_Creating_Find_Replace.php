<?php
// Application(script)
// Replace search text
// str_replace($search, $replace, $str)
// $cut_off mean how many character do you want to remove
// Or Total number of original character
// substr_replace($str, $replace, $start_position, $cut_off)



if (isset($_POST['text']) && isset($_POST['search_for']) && isset($_POST['replace_with'])){
	
	$str = $_POST['text'] ;
	$search = $_POST['search_for'] ;
	$replace = $_POST['replace_with'] ;
	
	// total no of search character to skip search string for next iteration
	$serch_lenght = strlen($search) ;
	$offset = 0 ;

	// now Check str is empty
	if(!empty($str) && !empty($search) && !empty($replace)){
			// return location of search in string
			while ($strpos = strpos($str, $search , $offset)) {
				$offset = $strpos + $serch_lenght ;

				$str = substr_replace($str, $replace, $strpos , $serch_lenght) ;
			}

			echo $str."<br>";

	}
	else{
		echo "Please fill in all fields<br><br>";
	}
}
?>

<html>
<body>
	<form action="54_Creating_Find_Replace.php" method="POST">
		<textarea name="text" cols="30" rows="6"></textarea> <br><br>
		Search For: <br>
		<input type="text" name="search_for"> <br><br>
		Replace with: <br>
		<input type="text" name="replace_with"> <br><br>
		<input type="submit" value="Find and Replace">
	</form>
</body>
</html>