<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_POST['submit']) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = "animalhousevermont@gmail.com";
  $subject = "";

  if (mail($to, $subject, $message)){
    mail ($to,$subject,$message);
    echo '<p>message sent!</p>';
  } else {
    echo '<p>something went wrong!</p>';
  }
}
?>