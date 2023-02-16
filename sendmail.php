<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = "vumaadigital.info@gmail.com";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        // the message was sent successfully
        echo "Message sent successfully. Redirecting...";
        header("Refresh: 3; url=index.html");
    } else {
        // the message failed to send
        echo "There was an error sending the message. Please try again.";
    }
}

?>
