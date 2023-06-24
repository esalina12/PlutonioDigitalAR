<?php
$nombre= $_POST['nombre'];
$email= $_POST['email'];
$mensaje = $_POST['textarea'];

$header.= "Content-type: text/plain";

$mensajeCompleto = "Este mensaje es enviado por". $nombre. ",\r\n";
$mensajeCompleto .= "Su email es:". $email. ",\r\n";
$mensajeCompleto .= "Mensaje:". $mensaje. ",\r\n";
$mensajeCompleto .= "Enviado el ". date('d/m/Y', time());

$para = 'eze2334@gmail.com';
$asunto = 'Hola';

mail($para, $asunto, utf8_decode($mensajeCompleto), $header);

header('Location:exito.html');
?>