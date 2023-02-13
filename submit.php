<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "newyip2002@gmail.com";
  $subject = "New message from website";
  $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Message failed to send, please try again.";
  }
}
?>
