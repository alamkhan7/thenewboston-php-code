<?php
// First open the file
// w for writing to a file
// r for reading to a file
// a for appending to a file


if (isset($_POST['name'])){
	$name = $_POST['name'] ;

	if(!empty($name)){
		// append the text
		$handle = fopen('names.txt', 'a') ;
		// Write input name to the file
		fwrite($handle, $name."\n") ;
		fclose($handle) ;

		// Now read a file line by line return as array
		$readin = file('names.txt') ;

		// To Remove last ,
		// count the name in array
		$Total_Name = count($readin) ;
		$counter = 1 ;

		echo "Current Name in names.txt file.<br>";	
		foreach ($readin as $fname) {
			// to remove whitespace or other character
			echo trim($fname);

			if($counter < $Total_Name)
				echo ", ";

			$counter++ ;
		}
	}
	else {
		echo "Please Enter the Name!<br>";
	}
}

?>

<form action="78_FileHandling_Reading_File.php" method="POST">
	Name:: <br>
	<input type="text" name="name"> <br>
	<input type="submit" value="Submit"><br>
</form>