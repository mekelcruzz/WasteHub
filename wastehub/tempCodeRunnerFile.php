<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $to = "your@email.com";
    $subject = "New Subscription";
    $message = "A new user subscribed with the email: " . $email;
    $headers = "From: webmaster@example.com";

    mail($to, $subject, $message, $headers);
}
?>