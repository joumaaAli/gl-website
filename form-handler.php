<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['Name']);
    $email = htmlspecialchars($_POST['Email']);
    $phone = htmlspecialchars($_POST['Phone']);
    $subject = htmlspecialchars($_POST['Subject']);
    $message = htmlspecialchars($_POST['Message']);

    $to = "admin@grleaders.org"; // Your email
    $email_subject = "New Contact: $subject";
    $email_body = "Name: $name\n".
                  "Email: $email\n".
                  "Phone: $phone\n".
                  "Subject: $subject\n\n".
                  "Message:\n$message";

    $headers = "From: noreply@grleaders.org\r\n";

    mail($to, $email_subject, $email_body, $headers);
}
?>
