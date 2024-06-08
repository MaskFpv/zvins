<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil data dari form
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  // Email tujuan
  $to = "kevinzeft21@gmail.com";
  // Subject email
  $email_subject = "Contact Form Submission: $subject";
  // Isi pesan email
  $email_body = "You have received a new message from the contact form on your website.\n\n" .
    "Here are the details:\n\n" .
    "Name: $name\n" .
    "Email: $email\n" .
    "Subject: $subject\n" .
    "Message: \n$message\n";

  // Headers
  $headers = "From: $email\n";
  $headers .= "Reply-To: $email";

  // Kirim email
  if (mail($to, $email_subject, $email_body, $headers)) {
    echo "Your message has been sent. Thank you!";
  } else {
    echo "There was an error sending your message. Please try again later.";
  }
}
