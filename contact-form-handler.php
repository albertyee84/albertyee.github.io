<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];

    $email_from = 'albertyee84@gmail.com';
    $email_subject = '$subject';
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Phone: $phone.\n".
                    "User Message: $message.\n";

    $to = "albertyee84@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);

    header("Location: index.html");
?>