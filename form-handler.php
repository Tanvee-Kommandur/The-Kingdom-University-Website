<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New form submition';

$email_body = "User name: $name.\n".
"User Email: $visitir_email.\n".
"Subject: $subject.\n".
"User Message: $message.\n";

$to = 'tanvee.sk@gmail.com';

$headers = "from : $email_from ]r]n";
$headers . = "Reple-To: $visitor_email \r\n";

mail($to, $email_subject,$email_body, $headers);

header("location: contact.html");

?>