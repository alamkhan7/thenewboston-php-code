<?php
// Take input from user and then return corresponding data from database

// Connect to server
require '113_Connecting_To_Server.php' ;
?>


<html>
<form action="115_SELECT_Mysql_PHP.php" method="GET">
	Choose Food Type:
	<select name="uh">
		<option value="h">Healthy</option>
		<option value="u">Unhealthy</option>
	</select>
	
	<br><br>

	<input type="submit" value="Submit"><br><br>
</form>
</html>



<?php
if ( isset($_GET['uh']) && !empty($_GET['uh']) )
{
	$uh = $_GET['uh'] ;
	if($uh == 'u' || $uh == 'h')
	{

		$query = "SELECT Food,Calories From Food WHERE Healthy_Unhealthy='$uh' " ;

		// mysqli_query() will return resource number not a record then you have to extract record from that resource
		if ($query_result = mysqli_query($db,$query)) 
		{
	
			if(mysqli_num_rows($query_result) == NULL)
			{
				echo "No record found in database<br>";
			}
			else
			{
				// return associative array the key value as column value
				while ( $query_row = mysqli_fetch_assoc($query_result)) 
				{
					$food = $query_row['Food'] ;
					$calories = $query_row['Calories'] ;

					echo $food . ' has ' . $calories . "<br>" ;
				}
			}
		}
		else
		echo "Query Failed.";
	}
	else
		echo "Please Select Healthy or Unhealthy.<br>";
}
else
	echo "Please Select Food Type.<br>";

?>