<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "kailas7pk7pk@gmail.com"; // Replace with your email address
    $subject = "New Message from Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo "Thank you, $name, for contacting us!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>