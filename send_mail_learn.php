<?php
$to = "khpo_bca2077@lict.edu.np";
$subject = "Hello! this is a test email sent by php";
$message = "Hello! This is a test email sent by php";

if(mail(
    $to,
    $subject,
    $message)){
    echo "Mail sent successfully";
}
?>
