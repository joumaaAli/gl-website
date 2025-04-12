<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $name = htmlspecialchars($_POST['Name']);
    $email = htmlspecialchars($_POST['Email']);
    $phone = htmlspecialchars($_POST['Phone Number']);
    $source = htmlspecialchars($_POST['source']);
    $membership_type = htmlspecialchars($_POST['membership-type']);
    $message = htmlspecialchars($_POST['Message']);

    // Recipient email address
    $to = "admin@grleaders.org";

    // Email subject and body
    $email_subject = "New Contact Form Submission: Membership Inquiry";
    $email_body = "You have received a new message from the Green Leaders website contact form.\n\n" .
                  "Here are the details:\n" .
                  "Name: $name\n" .
                  "Email: $email\n" .
                  "Phone: $phone\n" .
                  "How did you hear about us: $source\n" .
                  "Membership Type: $membership_type\n\n" .
                  "Message:\n$message";

    // Headers
    $headers = "From: noreply@grleaders.org\r\n";

    // Send the email
    mail($to, $email_subject, $email_body, $headers);
}
?>
