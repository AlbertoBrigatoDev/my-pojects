<?php

// ricezione input del form

$name = $_POST['name'];

$email = $_POST['email'];

$subject = $_POST['subject'];

$clientMessage = $_POST['message'];

// headers

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// costruzione message

$message = '<html><body><h4>Messaggio da'. $name . '</h4>';

$message .= '<h5> Oggetto: ' . $subject . '</h5>';

$message .= '<p>' . $clientMessage . '</p>';

$message .= '</body></html>';

$to = 'alberto.brigato00@gmail.com';

$conn=mysqli_connect(localhost,"root@localhost","****","****");

mail($to, $subject, $message, $headers);















?>