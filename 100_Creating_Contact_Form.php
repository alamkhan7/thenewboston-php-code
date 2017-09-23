<?php
// Sending message to specific email address

if ( isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text']) ) {
	
	if (!empty($_POST['contact_name']) && !empty($_POST['contact_email']) && !empty($_POST['contact_text']) ){
		$contact_name = $_POST['contact_name'] ;
		$contact_email = $_POST['contact_email'] ;
		$contact_text = $_POST['contact_text'] ;

		$to = 'moskan9595@gmail.com' ;
		$subject = 'Contact form submitted' ;
		$body = $contact_name . "\n" .$contact_text ;
		$header = 'From: ' . $contact_email ;

		if(mail($to , $subject , $body , $header))
			echo "Thanks for contacting us. We'll be in touch soon.<br>";
		else
			echo "Error Occur Please Try Again.<br>";
	}
	else
		echo "Please Fill The Form<br>";
}
else
	echo "Please Submit The Form First.<br>";
?>

<form action="100_Creating_Contact_Form.php" method="POST">
	Name: <br>
	<!-- Also check max lenght in php code bcx if user save html page and make change and then uploaded from local server  -->
	<input type="text" name="contact_name" maxlength="10"> <br><br>
	Email: <br>
	<input type="text" name="contact_email" maxlength="20"> <br><br>

	Message: <br>
	<textarea name="contact_text"  cols="30" rows="10" maxlength="10000"></textarea> <br><br>

	<input type="submit" value="Submit"> 
</form>