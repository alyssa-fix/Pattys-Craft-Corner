<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Patty's Craft Corner Contact</title>
</head>
<body>
  <h2>Patty's Craft Corner Contact</h2>

<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $category = $_POST['text-one'];
  $ornament = $_POST['text-two'];

  $to = 'patty@pattyscraftcorner.com';
  //$to = '2puppys@gmail.com';
  $msg = "$name sent you a message from your website.\n" .
  "Their email address is: $email.\n" .
  "The message is: $message\n".
  "They picked the category: $category\n".
  "They picked the ornament: $ornament\n";
  
  mail($to, $subject, $msg, 'From:' . $email);

  echo 'Thanks for submitting the form. This is the information that was sent.<br />';
  echo 'Your Name: ' . $name . '<br />';
  echo 'Your Email Address: ' . $email . '<br />';
  echo 'Subject Line: ' . $subject . '<br />';
  echo 'Main Message: ' . $message . '<br />';
  echo 'Ornament Category: ' . $category . '<br />';
  echo 'Specific Ornament: ' . $ornament;
?>

</body>
</html>
