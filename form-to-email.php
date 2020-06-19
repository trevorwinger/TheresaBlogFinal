<?php
if(!isset($_POST['submit']))
{
  echo "error; you need to submit the form";
}

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST["message"];
if(empty($name)||empty($visitor_email))
{
  echo "name and email are necessary!";
  exit;
}

$email_from = "twinger@mesabi.com";
$email_subject = "New Submission from website";
$email_body = $message;

$to = "winge159@d.umn.edu";
$headers = "From: $email_from \r \n";
mail($to, $email_subject, $email_body, $headers);
echo "submitted form";
 ?>
