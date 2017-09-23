<?php

// Does it exist? or "Has it been submitted?"
if(  isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']) ){
	
	$day = $_GET['day'] ;
	$date = $_GET['date'] ;
	$year = $_GET['year'] ;

	// is it empty or "does value==NULL"
	if (!empty($day) && !empty($date) && !empty($year) ){
		echo "The date is: " . $day . ' ' . $date . ' ' . $year . '<br>';
	}
	else{
		echo "Please Fill The Form First <br>";
	}
}
else
	echo "Please sumbit the form<br>";
?>

<form action="69_$_GET Variable.php" method="GET">
	Day:: <br> <input type="text" name="day"> <br>
	Date:: <br> <input type="text" name="date"> <br>
	Year:: <br> <input type="text" name="year"> <br><br>

	<input type="submit" value="Submit">
</form>