<?php
// Simple to upload file Not secure method because user can upload any file to your server

// return associative array so key value to get file name as 'name'
$name = $_FILES['file']['name'] ;
// $size = $_FILES['file']['size'] ;
// $type = $_FILES['file']['type'] ;

// when file is uploaded it store in server temporary location so we get the file from that tmp location
$tmp_location = $_FILES['file']['tmp_name'] ;

if( isset($name) ){
	if(!empty($name)){
		$location = 'uploads/' ; // this is uploads folder

		if (move_uploaded_file($tmp_location, $location . 'image.jpg') ) // append file with location
			echo "Uploaded done<br>";
	}
	else
		echo "Please Choose a file <br>";
}

?>

 <!-- enctype attribute tell how to encode the data -->
<form action="87_Uploading_File.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br>
	<input type="submit" value="Submit"><br>
</form>