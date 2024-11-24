<?php

// Set the recipient email address (your email address)
$to = "yair.lakretz@gmail.com";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the form data
    $name = htmlspecialchars(trim($_POST['name'])); // Sanitize name input
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL); // Sanitize email input
    $message = htmlspecialchars(trim($_POST['message'])); // Sanitize message input

    // Validate the email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    // Set the subject of the email
    $subject = "New Contact Form Submission from $name";

    // Build the email content
    $emailContent = "
    Name: $name\n
    Email: $email\n\n
    Message:\n$message
    ";

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>

