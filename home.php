<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];

$to = "kunal12899@gmail.com";
$subject = "Hello World";
$message = "Firstname: $firstname \n\n Lastname: $lastname";
$from = "kunal12899@gmail.com";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?>