<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $email_from = 'formcontact976@gmail.com';
    $email_subject = "Getting in touch";
    $email_body = "User Name: $name.\n"
                    "User Email: $visitor_email.\n"
                    "User Message: $message.\n"
    $to = "ljxrustin@gmail.com";
    $headers = "From $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: Index.html");
?>