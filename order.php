<?php

	/* Simple order form script 
		Uses $_POST variables: email, name, date, suggestions
	**/
	$email = htmlspecialchars($_POST['email']);
	$phone = htmlspecialchars($_POST['phone']);
	$name = htmlspecialchars($_POST['name']);
	$company = htmlspecialchars($_POST['company']);

	/* You can edit the templates below to customize reservation emails. Remember to change $mail_address to your email address. */
	$mail_subject = "Someone has made a request through JustinMichaelLeigh.com";
	$mail_content = "Inquiry Details!\r\n 
			\r\nName: ".$name."
			\r\nEmail: ".$email."
			\r\nPhone: ".$phone."
			\r\nCompany: ".$company."		
			";
	$mail_address = "gibbs.justin@gmail.com";   /*  Your email **/

	$mail_content = wordwrap($mail_content, 70, "\r\n");
	$headers = 'From: JustinMichaelLeigh.com' . "\r\n" .
    'Reply-To: $email' . "\r\n" .'X-Mailer: PHP/'.phpversion();
	mail($mail_address, $mail_subject, $mail_content, $headers);
	$redirect_page = getcwd()."thank-you.html";
	header('Location:thank-you.html');
?>
