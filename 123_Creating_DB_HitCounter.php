<?php
// count visitor ip
// Grab value from database and update the value and then store back

require  '123_Connect.php' ;

$user_ip = $_SERVER['REMOTE_ADDR'] ;

function ip_exists(){
	global $user_ip ;
	global $db ;

	$query = "SELECT ip from hits_ip WHERE ip='$user_ip'" ;
	$query_result = mysqli_query($db , $query) ;

	while ( $query_record = mysqli_fetch_assoc($query_result)) 
				{
					$ip = $query_record['ip'] ;

					if ($ip == $user_ip){
						return true ;

					}
				}

	return false ;
}
 function ip_add($ip){
 	global $db ;
 	if ( ip_exists() ){
 		echo "IP Already Exist<br>";
 	}
 	else{
 		
 		$query = "INSERT INTO hits_ip VALUE('$ip') " ;
 		$query_result = mysqli_query($db,$query) ;
 		update_count() ;
 		echo "New IP Has Been Added<br>";
 	}
 	
 	

 	

 }

function update_count(){
	global $db;
	$query = "SELECT count FROM hits_count" ;

	if ($query_result = mysqli_query($db , $query) ){

		while ( $query_row = mysqli_fetch_assoc($query_result)) 
				{
					$count = $query_row['count'] ;
					echo $count . "<br>" ;

					$count_inc = $count + 1 ;

					$query_update = "UPDATE hits_count SET count='$count_inc' WHERE count='$count' " ;
					if( $update_result=mysqli_query($db,$query_update) )
						echo "Count Update Done<br>";

					
				}
	
	}
	else{
		echo "Query Failed";
		mysqli_error($db);
	}

}
 ip_add($user_ip);
?>