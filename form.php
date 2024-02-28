<?php
$name=$_post['name'];
$visitor_email=$_post['email'];
$subject=$_post['subject'];
$message=$_post['message'];

$email_form='SVVV@jiyanshuwebsite.com';

$email_subject='New Form Submission';

$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "Subject: $subject.\n".
            "User Message: $message.\n";

$to ='jainjiyanshu@gmail.com';
$headers="Form: $email_from \r\n";
$headers .="Reply-To: $isitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:Contact.html");
?>