<?php

$email = $_POST['Subscribe'];


$formcontent="Correo de interesado\n\nEmail:$email";
$recipient = "contacto@solucionart.com.mx";
$subject = "SolucionArt Interesado: $email";
$mailheader = "De: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: http://solucionart.com.mx/index.html");
die();

?>
