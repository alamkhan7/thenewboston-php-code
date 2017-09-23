<?php
session_start() ;

if (!isset($_POST['secure'])) 
{
	$_SESSION['secure'] = rand(1000,9999) ;
}
else{
	if ($_SESSION['secure'] == $_POST['secure']){
		echo "Match.<br>" ;
	}
	else{
		echo "Invalid.<br>";
		$_SESSION['secure'] = rand(1000,9999) ;
	}
}


?>

<img src="164_Generate_Captha.php" alt="Captcha">
<br>
<form action="164_Creating_Captcha_image.php" method="POST">
	Type the value: 
	<input type="text" size="6" name="secure"><br>
	<input type="submit" value="Submit">
</form>

