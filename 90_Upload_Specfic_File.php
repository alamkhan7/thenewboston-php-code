<?php
// Simple to upload file Not secure method because user can upload any file to your server
// Uploading Specific files

// return associative array so key value to get file name as 'name'
$name = $_FILES['file']['name'] ;
// return file extension
 $extension = strtolower(substr($name, strpos($name, '.') + 1)) ;


// $size = $_FILES['file']['size'] ;

// if upload image then image type will be = image/jpeg
$type = $_FILES['file']['type'] ;

// when file is uploaded it store in server temporary location so we get the file from that tmp location
$tmp_location = $_FILES['file']['tmp_name'] ;

if( isset($name) ){
	if(!empty($name)){
		if ( ($extension=='jpg' || $extension=='jpeg') && $type == 'image/jpeg'){
			$location = 'uploads/' ;

			if (move_uploaded_file($tmp_location, $location . 'image.jpg') ) // append file with location
				echo "Uploaded done<br>";
		}
		else{
			echo "File Type is not jpg or jpeg <br>";
		}
	}
	else{
		echo "Please Choose a file <br>";
	}
}

?>

 <!-- enctype attribute tell how to encode the data -->
<form action="90_Upload_Specfic_File.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br>
	<input type="submit" value="Submit"><br>
</form>