<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"]



$message = $_POST["message"];

$recipient = "zahraaaaa1380@gmial.com";

$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href="zahra.html" style="text-decoration:none;color:#ff0099;"> Return Home</a>";
?>
