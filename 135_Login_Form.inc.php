<?php

if(isset($_POST['username']) || isset($_POST['password']) )
{
	$username = $_POST['username'] ;
	$password = $_POST['password'] ;

	if(!empty($username) && !empty($password))
	{
		// To protect against sql injection we use mysql_real_escape_string() function
		/* Which adds escape character and this function can only be used when open valid sql connection establish or when are connected to mysql database */
		$query = "SELECT id FROM user WHERE username= '" . mysqli_real_escape_string($db,$username) . "' AND password='" .mysqli_real_escape_string($db,$password) ."' " ;

		if($query_result = mysqli_query($db,$query))
		{
			$query_num = mysqli_num_rows($query_result) ;
			if ($query_num > 0 )
			{
				$record = mysqli_fetch_assoc($query_result) ;
				echo $user_id = $record['id'] ;

				// Session is start in 135_Return_Current_Page
				// store user_id in session when they login
				$_SESSION['user_id'] = $user_id ;

				// return back to index page
				header('Location: 135_Create_User_Login_System.php');

			}
			else
				echo "Invalid Username/Password.<br>";
		}
		else
			echo "You Must Supply Username/Password.<br>";
	}
	else
		echo "Plese Fill The Form.<br>";
}


?>

<form action="135_Create_User_Login_System.php";" method="POST">
	Username: <input type="text" name="username"> <br>
	Password: <input type="password" name="password"> <br>

	<input type="submit" value="Login">
</form>