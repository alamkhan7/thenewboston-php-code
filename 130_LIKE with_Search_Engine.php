<?php
// Write Program which serach name in database (table names)
require '113_Connecting_To_Server.php' ;

if (isset($_GET['name']) && !empty($_GET['name']) )
{
	$name = $_GET['name'] ;

	$query = "SELECT name FROM names WHERE name LIKE '%".$name. "%' " ;

	$query_result = mysqli_query ($db,$query) ;

	if (mysqli_num_rows($query_result) >= 1)
	{
		echo "Record Found<br>";
		
		while ($record = mysqli_fetch_assoc($query_result) ) {
			
			echo $record['name'] . "<br>";
		}
	}
	else
		echo "No Result Found <br>";
}
else
	echo "Please Fill The Form<br>";
?>

<form action="130_LIKE%20with_Search_Engine.php" method="GET">
	Name: <br>
	<input type="text" name="name"> <br><br>
	<input type="submit" value="Search">
</form>