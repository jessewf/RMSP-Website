<?php
$ccr_subject = ' Hi! - From Riko Method School of Piano'; // Subject of your email
$to = "admissions@rikomethod.com";  //Recipient's E-mail

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['email'] . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$ccr_message .= 'Name: ' . $_REQUEST['name'] . "<br>";
$ccr_message .= $_REQUEST['message'];

echo "test"

if (@mail($to, $ccr_subject, $ccr_message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>
