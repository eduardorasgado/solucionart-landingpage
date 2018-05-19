<?php

$email = $_POST['Subscribe'];



$serviceToSend = $services[$service];

$formcontent="Correo de interesado\n\nEmail:$email";
$recipient = "eduardo.rasgado@beemsites.com";
$subject = "Beemsites Interesado: $email";
$mailheader = "De: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: http://solucionart.com.mx/index.html");
die();

?>
