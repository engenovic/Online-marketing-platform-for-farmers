<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	header("Location: ../feedback/mailFailed.php");
}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

//Validate first
if(empty($name)||empty($email)||empty($subject)) 
{
    header("Location:../feedback/mailFailed.php");
    exit;
}

if(IsInjected($visitor_email))
{
  header("Location:../feedback/mailFailed.php");
  exit;
}

$email_from = "erefwarengeno@gmail.com";
$email_subject = $subject;
$email_body = "You have received a new message from user: $name.\n".
    "Here is the message:\n $message".
    
$to = "erefwarengeno@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header("Location: ../feedback/mailSuccess.php");


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 