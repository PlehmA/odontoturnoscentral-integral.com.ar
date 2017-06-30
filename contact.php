<?php
if (!isset($_POST['enviar'])) {
	echo "<script>alert ('Porfavor Complete el Formulario!')</script>";
    echo "<script>window.location.assign('index.php')</script>";
}else {
	echo " ";
$email = $_POST['email'];
$pregunta = $_POST['texto'];

$mensaje="Mensaje de contacto de Central Turnos";
$mensaje.= "\nEmail: ".$email;
$mensaje.= "\nMensaje: ". $pregunta;

$asunto = "Mensaje enviado por: ".$email;
$remitente = $email;
$destino= "sistemas@odontopraxis.com.ar";
$asunto = "CONTACTO - Mensaje enviado por: ".$email;
mail($destino,utf8_decode($asunto),utf8_decode($mensaje),"FROM: $remitente");
	echo "<script>alert ('Mensaje enviado!')</script>";
    echo "<script>window.location.assign('index.php')</script>";
}

 ?>