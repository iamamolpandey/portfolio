<?php
if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "akpandey006007@gmail.com"; // Change this email to your //
$subject = "$m_subject:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";
$header = "From: $email";
$header .= "Reply-To: $email";	

$to = $email // Change this email to your //
$subject = "ThankYou for contacting us Mr./Mrs. $name";
$body = "this mail is regards you have contacting to our website AmolPortfolio. Your feedback/Query are important to us. Mr. Amol Pandey will resolve soon your queries.\n\n\n\n\n\n Here is copy of your given feedback/Query.\n\nSubject: $m_subject\nName: $name\n Your Message:\n$message;
$header = "From: "akpandey006007@gmail.com";
$header .= "Reply-To: $email";	

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
