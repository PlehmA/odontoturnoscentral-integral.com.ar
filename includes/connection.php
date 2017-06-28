<?php 
$con = new mysqli();
if ($con->connect_errno > 0);
	die ( "Error en la conexión" );
	return $con;
?>