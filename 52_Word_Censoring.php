<?php
// String function example exlude certain words from input

$find = array ('alex' , 'billy' , 'dale') ;
$replace = array ('a**x' , 'b***y' , 'd**e') ;
if( isset($_POST['user_input']) && !empty($_POST['user_input']) ){
	echo $input_data = $_POST['user_input'] . '<br>';
	echo str_ireplace($find, $replace, $input_data);
}

?>

<html>
<body>

<form action="52_Word_Censoring.php" method="POST">
<hr>
	<textarea name="user_input" cols="30" rows="7"></textarea> <br><br>
	<input type="submit" value="Submit">

</form>		

</body>
</html>