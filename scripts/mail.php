<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$content="Od: $name \n Email: $email \n Wiadomość: $message";
$to = "marcin.nowak21a@wp.pl";
$mailheader = "Od: $email \r\n";
mail($to, $content, $mailheader);
echo "Email wysłany";
?>