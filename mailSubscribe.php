<?php

$email = $_POST['Subscribe'];


$formcontent="Correo de interesado\n\nEmail:$email";
$recipient = "eduardo.rasgado@beemsites.com";
$subject = "SolucionArt Interesado: $email";
$mailheader = "De: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: http://solucionart.com.mx/index.html");
die();

?>
