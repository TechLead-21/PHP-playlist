<?php

$to_email = "techlead.2112@gmail.com";
$subject = "Simple test Email via PHP";
$body = "Hi, This is from Localhost";
$headers = "From: jtembhekar2@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "<h1>Email sent successfully to $to_email 😍</h1>";
}
else{
    echo "<h1>Email sending failed...😢</h1>";
}

?>