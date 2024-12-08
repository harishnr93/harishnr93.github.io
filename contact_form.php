<?php
// Default recipient email address
$to = "harrish.nr@gmail.com";

// Form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Email headers
$headers = "From: noreply@example.com\r\n"; // Default sender email
$headers .= "Reply-To: $email\r\n"; // Reply to user's email

// Email subject and body
$subject = "Contact Form Submission from $name";
$body = "You have received a message from $name ($email):\n\n$message";

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
} else {
    echo "Failed to send message.";
}
?>
