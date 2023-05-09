<?php
if(isset($_POST['submit'])) {
    $to = "himanshugupta11094@gmail.com"; // your email address
    $subject = "Email from website"; // email subject
    $name = $_POST['name']; // sender's name
    $from = $_POST['email']; // sender's email address
    $message = $_POST['message']; // message
    $headers = "From: $from"; // email headers

    if(mail($to, $subject, $message, $headers)) {
        echo "Your email has been sent successfully.";
    } else {
        echo "Unable to send email. Please try again later.";
    }
}
?>