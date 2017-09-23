<?php
// To ristric on file Size

// return associative array so key value to get file name as 'name'
$name = $_FILES['file']['name'] ;
$size = $_FILES['file']['size'] ; // return size in byte
// $type = $_FILES['file']['type'] ;

$max_size = 209 ; //  2mega byte
// when file is uploaded it store in server temporary location so we get the file from that tmp location
$tmp_location = $_FILES['file']['tmp_name'] ;

if( isset($name) ){
	if(!empty($name)){
		
		if ( $size <= $max_size ){
			$location = 'uploads/' ;

			if (move_uploaded_file($tmp_location, $location . 'image.jpg') ) // append file with location
				echo "Uploaded done<br>";
		}
		else{
			echo "File Size is Large then 209byte <br>";
		}
	}
	else{
		echo "Please Choose a file <br>";
	}
}

?>

 <!-- enctype attribute tell how to encode the data -->
<form action="89_File_Upload_Restric_Size.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br>
	<input type="submit" value="Submit"><br>
</form>