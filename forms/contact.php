<?php
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$phone = $_POST["phone"];
	$content = $_POST["message"];

	$toEmail = "shubhamadawale2210@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders ,$phone)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "index.html";
?>