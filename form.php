<?php
$nombre= $_POST['nombre'];
$email= $_POST['email'];
$mensaje = $_POST['textarea'];

$header.= "Content-type: text/plain";

$mensaje = "Este mensaje es enviado por". $nombre. ",\r\n";
$mensaje .= "Su email es:". $email. ",\r\n";
$mensaje .= "Mensaje:". $_POST['textarea']. ",\r\n";
$mensaje .= "Enviado el ". date('d/m/Y', time());

$para = "eze2334@gmail.com";
$asunto = 'Hola';

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:exito.html');
?>