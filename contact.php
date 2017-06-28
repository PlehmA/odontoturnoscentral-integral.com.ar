<?php
session_start();
if (isset($_POST['enviar'])) {
	$mensaje="Mensaje de contacto de Central Turnos";
  	$mensaje.= "\nEmail: ".$_POST['email'];
  	$mensaje.= "\nTelefono: ". $_POST['texto'];
  	$remitente = $_POST['email'];
  	$asunto = "Mensaje enviado por: ".$_POST['email'];
  	$email = "sistemas@odontopraxis.com.ar";
  	mail($email, $asunto, $mensaje);
header("Location:correo_enviado.html");
}

 ?>