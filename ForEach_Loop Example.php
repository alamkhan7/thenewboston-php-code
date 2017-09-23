<?php

$team = array ('Player1' => 'Alam' ,
			   'Player2' => 'Khan' ,
			   'Player3' => 'XYZ'
			   ) ;



foreach ($team as $value) {
	echo $value . '<br>' ;
}


foreach ($team as $key => $value) {
	echo $key . ' => ' . $value . '<br>' ;
}


?>