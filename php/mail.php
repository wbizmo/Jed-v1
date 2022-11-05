<?php
//get data from form  

$firstname = $_POST['first-name'];
$lastname = $_POST['last-name'];
$phone = $_POST['phone-number'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "ashibuogwuwilliams64@gmail.com";
$subject = "Mail From website";
$txt ="firstName = ". $firstname . "\r\n lastname =" . $lastname . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Phone =" . $phone;
$headers = "From: bizmo@mybusinesshq.co" . "\r\n" .
"CC: wbizmo@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:about.html");
?>