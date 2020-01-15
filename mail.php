<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $formcontent = "From: $name \n Email: $email \n Phone: $phone \n Message: $message";

    $recipient = "info@mgcreations.co.za";
    $subject = "Enquiry for Website";
    $mailheader = "From: $email \r\n";

    mail($recipient,$subject,$formcontent,$mailheader) or die("Error!");

    if (!$_POST['submit'] == 'Submit')
    {
        header('Location: http://vhaaccounting.co.za/');
    }
?>