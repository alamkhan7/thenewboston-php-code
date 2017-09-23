<?php
// Registeration Form
require '135_connect.inc.php' ;
require '135_Return_Current_Page.inc.php' ;

if (!loggedin())
{
	echo "<strong>Please Register.</strong><br><br>";

	if (isset($_POST['username']) && 
		isset($_POST['password']) &&
		isset($_POST['password_agian']) &&
		isset($_POST['firstname']) &&
		isset($_POST['surname'])
		){

		$username = $_POST['username'] ;
		$password = $_POST['password'] ;
		$password_agian = $_POST['password_agian'] ;
		$password_hash = md5($password) ;
		$firstname = $_POST['firstname'] ;
		$surname = $_POST['surname'] ;

		if( !empty($username) &&
			!empty($password) &&
			!empty($password_agian) &&
			!empty($firstname) &&
			!empty($surname)
			){
				if (strlen($username) > 20 || strlen($password) > 32 || strlen($firstname) >30 || strlen($surname) > 30)
				{
					echo "You entered Maximum Lenght.<br>";
				}
				else
				{
					// Compare password
				if ($password == $password_agian)
				{
					global $db ;
					$query = "SELECT username FROM users WHERE username = '$username'" ;
					$query_result = mysqli_query ($db,$query) ;
					if (mysqli_num_rows($query_result)==0)
					{
						$query = "INSERT INTO users VALUES('',
														  '".mysqli_real_escape_string($db,$username)."',
														  '".mysqli_real_escape_string($db,$password_hash)."',
														  '".mysqli_real_escape_string($db,$firstname)."',
														  '".mysqli_real_escape_string($db,$surname)."') 
														  " ;

						if ($query_result = mysqli_query($db,$query))
						{
							// Get back to index page
							header('Location: 144_Register_Success.php' ) ;
						}	
						else
							echo "Sorry, We couldn't register you at this time. Try again later.<br> ";							  
					}
					else
						echo "Sorry " . $username . " already exist choose another username.<br>" ;

				}
				else
					echo "Password Not Match<br>";
				}


		}
		else
			echo "All Fields Are Required.<br>";
	}
}
?>

	<form action="144_Register_Form.php" method="POST">
		Username: <br><input type="text" name="username" maxlength="20" value=" <?php if (isset($username)){echo $username;} ?>" > 
		<br><br>
		Password: <br><input type="password" name="password" maxlength="32"> <br><br>
		Password agian: <br><input type="password" name="password_agian" maxlength="32"> <br><br>
		Firstname:	<br><input type="text" name="firstname" maxlength="30" value= "<?php if (isset($firstname)){echo $firstname;} ?>"> <br><br>
		Surname: <br><input type="text" name="surname" maxlength="30" value="<?php if (isset($surname)){echo $surname;} ?>"> <br><br><br>

		<input type="submit" value="Register">
	</form>


<?php
//else 
{
	//echo "<strong>Your are already Registered and logged in.</strong>";
}
?>
