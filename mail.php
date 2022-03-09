<?php $name = $_POST['fname'];
$email = $_POST['contact'];
$message = $_POST['subject'];
$formcontent="From: $fname \n Message: $subject";
$recipient = "manyamprasad@hotmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
