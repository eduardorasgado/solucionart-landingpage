<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Mensaje de Interesado\n\nDe: $name \nEmail:$email \nMensaje: $message";
$recipient = "contacto@solucionart.com.mx";
$subject = "SolucionArt Interesado: $name";
$mailheader = "De: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: http://solucionart.com.mx/index.html");
die();

?>
