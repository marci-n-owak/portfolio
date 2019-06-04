<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$content="Od: $name \n Email: $email \n Wiadomość: $message";
$recipient = "marcin.nowak21a@wp.pl";
$mailheader = "Od: $email \r\n";
mail($recipient, $content, $mailheader) or die("Error!");
echo "Email wysłany";
?>