<?php
$Nombre = $_POST['nombre'];
$Telefono = $_POST['telf'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $email . "\r\n";
$header = "X-Mailer: PHP/" . phpversion() . "\r\n";
$header = "Mime-Version: 1.0 \r\n";
$header = "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por" . $Nombre . ",\r\n";
$mensaje = "Su e-mail es:" . $email . "\r\n";
$mensaje = "Mensaje:" . $_POST['mensaje'] . "\r\n";
$mensaje = "Enviado el " . date('d/m/Y', time());

$para= 'valarnal@gmail.com';

mail($para, utf8_decode($mensaje), $header);

header('Location:index.html');

?>