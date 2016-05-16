<?php
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
$subject = "Thank you";
$message = "Thank you for submitting your feedback. Your response is submitted to Management.";

$headers = 'From: ibhatt@mail.ccsf.edu'. "\r\n"; // Sender's Email
$headers .= 'Cc: rinkiraval@gmail.com'. "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail($email, $subject, $message, $headers);

}
}
}
?>