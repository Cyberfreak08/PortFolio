<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject']
$message= $_POST['message'];
$to = "harisundarofficial08@gmail.com";
// $subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "harisundar12345678@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>