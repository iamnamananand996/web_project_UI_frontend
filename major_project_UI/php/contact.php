<?php
//if "email" variable is filled out, send email
  if (empty($_POST['name'])   ||
     (empty($_POST['email'])  ||
     (empty($_POST['phone'])  ||
     (empty($_POST['message'])  ||
      !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
      {
          echo " No argumets Provided !";
          return false;
      }
      
$name = strip_tags(htmlspecialchars($_POST['name']));      
$email_address = strip_tags(htmlspecialchars($_POST['email']));      
$phone = strip_tags(htmlspecialchars($_POST['phone']));      
$message = strip_tags(htmlspecialchars($_POST['message']));
      
      
      
      
      
$to = 'iamnamananand996@gmail.com';
      
$email_subject = "Website Contact Form : $name";
$email_body = " You have recevied a new message from website conatact from.n\n"."Here are the detaits: \n\nName: $$name\n\nEmail: $email_address \n\n Phone : $phone \n\nMessage : \n$message";
      
      $header. = "Form : norelpy@yourdomin.com\n";
      
      mail($to,$email_subject,$email_body,$headers);
      return true;
      ?>
      
      
  
 