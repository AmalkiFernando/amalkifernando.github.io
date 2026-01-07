<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "03crishani@gmail.com"; // <-- Replace with your email
    $headers = "From: $email";

    if(mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location='index.html';</script>";
    } else {
        echo "<script>alert('Failed to send message.'); window.location='index.html';</script>";
    }
}
?>
