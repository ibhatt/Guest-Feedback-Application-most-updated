<?php
	
	define('DB_NAME', 'guestFeedback');
	define('DB_USER', 'ibhatt');
	define('DB_PASSWORD', 'ektasumit2628');
	define('DB_HOST', 'localhost');
	
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	
	
	
	
	
	if (!$link) {
		die('Database Query Failed');
	}
	
	
		$response = $_POST['response'];
		$service = $_POST['service'];
		$room = mysqli_real_escape_string($link,$_POST['room']);
		$value = $_POST['value'];
		$cleanliness = $_POST['cleanliness'];
		$feedback = $_POST['feedback'];
		$email = $_POST['email'];
		$phone = $_POST['phonenumber'];
	
		
	
	$sql = "Insert into feedback(response, service, room, value, cleanliness, feedback, email, phone, timedate) values('$response','$service','$room','$value','$cleanliness','$feedback','$email','$phone',NOW())";
	$result = mysqli_query($link,$sql);
	if (!$result) {
		die('Error reported' . mysqli_error($link) . mysqli_errno($link));
	}
	
	header( "refresh:5;url=GuestFeedback.php" );
	if(isset($_POST["submit"])){
	// Checking For Blank Fields..
	if($_POST["email"]==""){
	echo "Fill All Fields..";
	}else{
	// Check if the "Sender's Email" input field is filled out
	$email=$_POST['email'];
	// Sanitize E-mail Address
	$email =filter_var($email, FILTER_SANITIZE_EMAIL);
	// Validate E-mail Address
	$email= filter_var($email, FILTER_VALIDATE_EMAIL);
	if (!$email){
	echo "Invalid Sender's Email";
	}
	else{
	$name = $_POST["name"];
	$subject = "Thank you ". $name ;
	$message = "Thank you for submitting your feedback. Your response is being submitted to Management.";

	$headers = 'From: ibhatt@mail.ccsf.edu'. "\r\n"; // Sender's Email
	$headers .= 'Cc: rinkiraval@gmail.com'. "\r\n"; // Carbon copy to Sender
	// Message lines should not exceed 70 characters (PHP rule), so wrap it
	$message = wordwrap($message, 70);
	// Send Mail By PHP Mail Function
	mail($email, $subject, $message, $headers);
	mail("4156910551@tmomail.net", "Your feedback is being submitted!", "From: ibhatt@mail.ccsf.edu\r\n");
	echo ("Thank you for taking your time. Your feedback is being submitted.");
	}
	}
	}
	
	
		
	mysqli_close($link);
	
	
	
?>
