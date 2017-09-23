 <?php
 //step 1. Database Connection
 //To connect to database: server name, user, and user's password
 //must be provided.
 
$db = mysqli_connect("localhost", "root", ")(*LKJ", "emp_pro");

	if(mysqli_connect_errno())
 	{
 		echo "Failed to connect to MySql: ".mysqli_connect_error();
 	}
 ?>

 <html>
 <head>
 <title> PHP MySql Basics </title>
 </head>

 <body>
 
 <?php
 $sql = "SELECT * FROM project";
 $result = mysqli_query($db, $sql);

 //step 4. Show result

 echo '<table style="
					border: 1px solid black;
					padding: 10px;
					width:30%;
					border-collapse: collapse;
					"
	  >' ;

	 echo '<caption>Project Table</caption>'; 

	 echo "<tr>"; 
			echo '<th style="border: 1px solid black;padding: 15px;text-align: center;background-color: black;
					color:white;"> Project_ID </th>' ;
			echo '<th style="border: 1px solid black;padding: 15px;text-align: center;background-color: black;
					color:white;"> Project_Name </th>' ;
			echo '<th style="border: 1px solid black;padding: 15px;text-align: center;background-color: black;
					color:white;"> Project_Budget </th>' ;
		echo "</tr>";
 	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
 	{
 		echo "<tr>";	
      			echo '<td style="border: 1px solid black;padding: 15px;text-align: left;">' ; printf ("%s",$row["Project_ID"]);
      			echo "</td>";
      			echo '<td style="border: 1px solid black;padding: 15px;text-align: left;">' ; printf ("%s",$row["Project_Name"]);
      			echo "</td>";
      			echo '<td style="border: 1px solid black;padding: 15px;text-align: left;">' ; printf ("%s",$row["Project_Budget"]);
      			echo "</td>"; 
      		echo "</tr>";
 		
 		echo "<br>";
 	}

 	echo '</table>';
 
 ?>
 
 </body>
 </html>

 <?php
 //step 5. Close Database Connection
 mysqli_close($db);
 ?>