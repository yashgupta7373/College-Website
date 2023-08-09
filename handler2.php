<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['Comment'];

$email_from = 'info@eduyash.netlify.app';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n";
              "User Email: $visitor_email.\n";
              "Comment: $comment.\n";
              

$to = 'ykg1357@gmail.com';

$headers = "From: $email_from \r\n"

$headers .= "Replay-To: $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers);

header("Location: blog.html");

?>