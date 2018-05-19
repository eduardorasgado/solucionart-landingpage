<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST["phone"];
$address = "";
if (isset($_POST['address'])) {
	$address = $_POST['address'];
}
$service = $_POST['service'];

$services = [
	"1" => "Servicio Electrico",
	"2" => "Diseño",
	"3" => "Marketing",
	"4" => "Capacitación",
	"5" => "Energías",
	"6" => "EHSQ"
];

$serviceToSend = $services[$service];

$formcontent="Mensaje de Interesado\n\nDe: $name \nEmail:$email \nTelefono: $phone \n$address \nServicio: $serviceToSend";
$recipient = "eduardo.rasgado@beemsites.com";
$subject = "Beemsites Interesado: $name";
$mailheader = "De: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: http://solucionart.com.mx/index.html");
die();

?>
