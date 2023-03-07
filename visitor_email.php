<?php
$to = "alexcraciun32@gmail.com";
$subject = "New Visitor on Your Website";
$message = "A new visitor has just landed on your website.";
$headers = "alexandercraciun.netlify.app\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to, $subject, $message, $headers);
?>
