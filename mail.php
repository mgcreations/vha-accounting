<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $formcontent = "From: $name \n Email: $email \n Phone: $phone \n Message: $message";

    $recipient = "info@vhaaccounting.com";
    $subject = "Enquiry for Website";
    $mailheader = "From: $email \r\n";

    mail($recipient,$subject,$formcontent,$mailheader) or die("Error!");

    if (!$_POST['submit'] == 'Submit')
    {
        header('Location: http://www.vhaaccounting.co.za/thank_you.html');
    }
?>