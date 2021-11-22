<?php	
	if(empty($_POST['lastname']) && strlen($_POST['lastname']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['how']) && strlen($_POST['how']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$email = $_POST['email'];
	$how = $_POST['how'];
	$message = $_POST['message'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from your website";
	$email_body = "You have received a new message. \n\n".
				  "Lastname: $lastname \nFirstname: $firstname \nEmail: $email \nhow: $how \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $how";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>