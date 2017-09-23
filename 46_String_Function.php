<?php
$str = 'Alam Khan' ;

// Find string Lenght
$str_len = strlen($str) ;
echo $str_len . "<br>";

//Upper and Lower Case Conversion
$upr = strtoupper($str) ;
echo $upr . "<br>";
$lwr = strtolower($str) ;
echo $lwr . "<br>";

if (isset($_GET['user_name']) && !empty($_GET['user_name']))
{
	$name = $_GET['user_name'] ;
	echo $name . "<br>";
}
?>

<!DOCTYPE html>
<html>
<body>
<form action="./46_String_Function.php" method="GET">
	Name : <input type="text" name="user_name"> <br><br>
	<input type="submit" value="submit">
</form>

</body>
</html>