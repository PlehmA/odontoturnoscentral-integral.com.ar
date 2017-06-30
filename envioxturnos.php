<?php  
if (!isset($_POST['enviar'])) {
	echo "Complete el formulario por favor...";
}else {
	echo " ";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$cobertura = $_POST['cobertura'];
$numafiliado = $_POST['numafiliado'];
$numdni = $_POST['numdni'];
$telefono = $_POST['telefono'];
$especialidad = $_POST['especialidad'];
$tipotrata = $_POST['tipotratamiento'];
$lunesmaniana = $_POST['lunesmaniana'];
$lunestarde = $_POST['lunestarde'];
$martesmaniana = $_POST['martesmaniana'];
$martestarde = $_POST['martestarde'];
$miermaniana = $_POST['miermaniana'];
$miertarde = $_POST['miertarde'];
$juevesmaniana = $_POST['juevesmaniana'];
$juevestarde = $_POST['juevestarde'];
$viernesmaniana = $_POST['viernesmaniana'];
$viernestarde = $_POST['viernestarde'];

$mensaje="Mensaje del formulario de contacto de solicitud de turnos";
$mensaje.= "\nNombre: ". $nombre;
$mensaje.= "\nEmail: ".$email;
$mensaje.= "\nObra social-cobertura: ". $cobertura;
$mensaje.= "\nNro de afiliado: ".$numafiliado;
$mensaje.= "\nDNI: ".$numdni;
$mensaje.= "\nTeléfono: ".$telefono;
  
$mensaje.= "\nSolicita-turno-para: ". $especialidad;
  
$mensaje.= "\nTratamiento: ".$tipotrata;
  
$mensaje.= "\nSelección de turnos: " . $lunesmaniana . $lunestarde . $martesmaniana . $martestarde . $miermaniana . $miertarde . $juevesmaniana . $juevestarde . $viernesmaniana . $viernestarde;
  
$destino= "turnos@central-integral.com.ar";
$remitente = $email;
$asunto = "SOLICITUD - Mensaje enviado por: ".$nombre;
mail($destino,utf8_decode($asunto),utf8_decode($mensaje),"FROM: $remitente");
	echo "<script>alert ('¡Gracias por elegirnos!')</script>";
    echo "<script>window.location.assign('turnos.php')</script>";


}
?>