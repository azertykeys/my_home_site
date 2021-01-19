<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'nicholas.jensen777@gmail.com';

$email_subject = "wowzers, contacted through the github page";

$email_body = "User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "User Message: $message.\n";

$to = "nicholas.jensen777@gmail.com";

$headers = "from: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>