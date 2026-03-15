<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$to="nirkunwar6@gmail.com";
$subject="New Message From Batch 2081 Website";

$body="Name: $name\n";
$body.="Email: $email\n\n";
$body.="Message:\n$message";

$headers="From: $email";

mail($to,$subject,$body,$headers);

echo "<h2 style='font-family:Arial;text-align:center;margin-top:50px;'>Message Sent Successfully!</h2>";
echo "<p style='text-align:center;'><a href='index.html'>Go Back to Website</a></p>";

}

?>




