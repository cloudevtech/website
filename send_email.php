<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $website = htmlspecialchars($_POST['website']);

    $to = "isurupathumherath@gmail.com"; // Replace with your email address
    $subject = "New Contact Request";
    $message = "You have received a new contact request.\n\n" .
               "Name: $name\n" .
               "Surname: $surname\n" .
               "Email: $email\n" .
               "Website: $website";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Your message has been sent successfully!'); window.location.href = '/';</script>";
    } else {
        echo "<script>alert('There was an error sending your message. Please try again.'); window.history.back();</script>";
    }
}
?>