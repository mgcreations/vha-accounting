<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $thankyou_page = "thank_you.html";

  $mailTo = "info@mgcreations.co.za"
  $headers = "From: " . $_POST['mail'];
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header( "Location: $thankyou_page" );
}