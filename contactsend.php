<?php
$name = $_post['name'];
$email = $_post['email'];
$message = $_post['message'];
$to = 'animalhousevermont@gmail.com';
$subject = "";

mail ($to,$subject,$message);
echo "message sent!";
?>