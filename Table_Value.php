<?php

$even = 0 ;
$odd= 1 ;
$prime =1 ;

echo '<table style="
					border: 1px solid black;
					padding: 10px;
					width:30%;
					border-collapse: collapse;
					"
	  >' ;

	echo '<caption>Task_1 On Number</caption>';
	  
		echo "<tr>"; 
			echo '<th style="border: 1px solid black;padding: 15px;text-align: center;background-color: black;
					color:white;"> Even </th>' ;
			echo '<th style="border: 1px solid black;padding: 15px;text-align: center;background-color: black;
					color:white;"> Odd </th>' ;
			echo '<th style="border: 1px solid black;padding: 15px;text-align: center;background-color: black;
					color:white;"> Prime </th>' ;
		echo "</tr>";

		for($num=1;	$num<=20; $num++){
				
			if ($num%2 == 0)
				$even = $num ;
			else
				$odd = $num ;

				$flag = 0 ;
				for($k=2;	$k<=$num/2;	$k++)
				{
      				if ($num % $k == 0)
      					$flag = 1 ;
      			}
      			
      			if ($flag == 0 && $num!=0 && $num!=2)
      				$prime = $num ;

      			
      		echo "<tr>";	
      			echo '<td style="border: 1px solid black;padding: 15px;text-align: left;">' . $even . "</td>";
      			echo '<td style="border: 1px solid black;padding: 15px;text-align: left;">' . $odd . "</td>";
      			echo '<td style="border: 1px solid black;padding: 15px;text-align: left;">' . $prime . "</td>";
      		echo "</tr>";		
		}

echo "</table>";
		
?>