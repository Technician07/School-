<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    $to = "nirkunwar6@gmail.com";
    $subject = "New Message from Your Website";
    $body = "Name: $name\n\nMessage:\n$message";
    $headers = "From: noreply@yourdomain.com";

    if(mail($to, $subject, $body, $headers)){
        echo "<p style='color:lime;text-align:center;margin-top:10px;'>Message sent successfully!</p>";
    } else {
        echo "<p style='color:red;text-align:center;margin-top:10px;'>Failed to send message. Try again.</p>";
    }
}
?>
