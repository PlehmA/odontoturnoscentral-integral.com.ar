<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/c2a2b83e4d.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="apple-touch-icon" sizes="57x57" href="Images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="Images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="Images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="Images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="Images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="Images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="Images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="Images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="Images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="Images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="Images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/favicon-16x16.png">
    <link rel="manifest" href="Images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="Images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	<title>Turnos</title>
</head>
<body>
<style>
* {
	font-family: font-family: 'Roboto', sans-serif;
}
body {
	background-color: rgba(48, 48, 48, 0.1);
}
	th {
		text-align: center;
	}
</style>
<div class="container">
<div class="text-center mb-4 mt-4">
	<h2>Solicitud de Turnos</h2>
	<img src="Images/logo4.png" alt="" class="img-fluid mx-auto" style="height: 50%; width: 50%;">
</div>
<div class="text-center text-capitalize text-success mb-3">
	<h6>Para solicitar turno de atención complete el siguiente formulario y un operador se comunicará a la brevedad.</h6>
</div>
<div class="text-center">
  <form action="envioxturnos.php" method="POST" id="frmcaptcha">
	<table class="table table-sm">
	<tr>
		<td style='border: inset 0pt'><label for="">Nombre/s y Apellido/s: </label></td>
		<td style='border: inset 0pt'><input type="text" class="form-control" name="nombre" required></td>
	</tr>
	<tr>
		<td style='border: inset 0pt'><label for="">Correo electrónico: </label></td>
		<td style='border: inset 0pt'><input type="email" class="form-control" name="email" required></td>
	</tr>
	<tr>
		<td style='border: inset 0pt'><label for="">Obra social /Cobertura: </label></td>
		<td style='border: inset 0pt'><input type="text" class="form-control" name="cobertura" required></td>
	</tr>
	<tr>
		<td style='border: inset 0pt'><label for="">Nro. de afiliado: </label></td>
		<td style='border: inset 0pt'><input type="number" class="form-control" name="numafiliado" required></td>
	</tr>
	<tr>
		<td style='border: inset 0pt'><label for="">Nro de Documento: </label></td>
		<td style='border: inset 0pt'><input type="number" placeholder=" Ej: 12845657" class="form-control" name="numdni" required></td>
	</tr>
	<tr>
		<td style='border: inset 0pt'><label for="">Teléfono de contacto: </label></td>
		<td style='border: inset 0pt'><input type="number" class="form-control" name="telefono" required></td>
	</tr>
	<tr>
		<td style='border: inset 0pt'><label for="">Especialidad: </label></td>
		<td style='border: inset 0pt'>
			<select name="especialidad" id="" class="form-control" required>
				<option value="Seleccione">Seleccione</option>
				<option value="Odontología General">Odontología General</option>
				<option value="Conductos / Endodoncia">Conductos / Endodoncia</option>
				<option value="Prótesis">Prótesis</option>
				<option value="Odontopediatría">Odontopediatría</option>
				<option value="Ortodoncia">Ortodoncia</option>
				<option value="Tratamiento de las encías-Periodoncia">Tratamiento de las encías-Periodoncia</option>
				<option value="Cirugía / Extracciones">Cirugía / Extracciones</option>
				<option value="Implantes">Implantes</option>
			</select>
		</td>
	</tr>
	<tr>
		<td style='border: inset 0pt'><label for="">Complete con sus palabras el tratamiento a realizar:</label></td>
		<td style='border: inset 0pt'><textarea name="tipotratamiento" id="" cols="40" rows="3" class="form-control"></textarea></td>
	</tr>
	<tr>
		<th style='border: inset 0pt'>Seleccione su día y horario disponible para solicitar turno</th>
		<th style='border: inset 0pt'>Mañana 8.30 a 12.30 hs</th>
		<th style='border: inset 0pt'>Tarde 14 a 20 hs</th>
	</tr>
	<tr>
		<td style='border: inset 0pt'>Lunes</td>
		<td style='border: inset 0pt'><input type="checkbox" name="lunesmaniana" value="Lunes-Mañana 8.30 a 12.30 hs"></td>
		<td style='border: inset 0pt'><input type="checkbox" name="lunestarde" value="Lunes-Tarde 14 a 20 hs"></td>
	</tr>
	<tr>
		<td style='border: inset 0pt'>Martes</td>
		<td style='border: inset 0pt'><input type="checkbox" name="martesmaniana" value="Martes-Mañana 8.30 a 12.30 hs"></td>
		<td style='border: inset 0pt'><input type="checkbox" name="martestarde" value="Martes-Tarde 14 a 20 hs"></td>
	</tr>
	<tr>
		<td style='border: inset 0pt'>Miercoles</td>
		<td style='border: inset 0pt'><input type="checkbox" name="miermaniana" value="Miercoles-Mañana 8.30 a 12.30 hs"></td>
		<td style='border: inset 0pt'><input type="checkbox" name="miertarde" value="Miercoles-Tarde 14 a 20 hs"></td>
	</tr>
	<tr>
		<td style='border: inset 0pt'>Jueves</td>
		<td style='border: inset 0pt'><input type="checkbox" name="juevesmaniana" value="Jueves-Mañana 8.30 a 12.30 hs"></td>
		<td style='border: inset 0pt'><input type="checkbox" name="juevestarde" value="Jueves-Tarde 14 a 20 hs"></td>
	</tr>
	<tr>
		<td style='border: inset 0pt'>Viernes</td>
		<td style='border: inset 0pt'><input type="checkbox" name="viernesmaniana" value="Viernes-Mañana 8.30 a 12.30 hs"></td>
		<td style='border: inset 0pt'><input type="checkbox" name="viernestarde" value="Viernes-Tarde 14 a 20 hs"></td>
	</tr>
		</table>
		<div class="text-muted">
			<p>Nota: <span class="text-danger">Para cirugía, endodoncia y periodoncia, debe traer ORDEN DE DERIVACION</span></p>
		</div>
		<center><div class="g-recaptcha" data-sitekey="6LdxEicUAAAAANxW4-RuWc-D6p_adeKmbcneTHvR"></div></center>
           <div class="mt-4 mb-2 btn-group">
           		<input type="reset" class="btn btn-danger">
           		<input type="submit" name="enviar" class="btn btn-success ml-1">
           </div>
  </form>
	<div class="text-center mb-5">
		<a href="index.php"><button class="btn active">Volver</button></a>
	</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
 crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  crossorigin="anonymous"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
 crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/12a86aaace.js"></script>
<script src="js/app.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
    $(document).ready(function(e) {
    // Capturamos el evento submit del formulario
    $("#frmcaptcha").submit(function(e) {
        $respuesta=false; // Suponemos por defecto que la validación será erronea
        // Realizamos llamada en AJAX
        $.ajax({
        url:"vrfcaptcha.php",  // script al que le enviamos los datos
        type:"POST",           // método de envío POST
        dataType:"json",       // la respuesta será en formato JSON
        data:$("#frmcaptcha").serialize(), // Datos que se envían (campos del formulario)
        async:false,     // Llamada síncrona para que el código no continúe hasta obtener la respuesta
        success:         // Si se ha podido realizar la comunicación
            function(msg){
               $respuesta=msg.success; // Obtenemos el valor de estado de la validación
               if($respuesta) {        // La validación ha sido correcta
                // Eliminamos del formulario el campo que contiene los parámetros de validación
                $("#g-recaptcha-response","#frmcaptcha").remove();
               } else    {
                  alert('Complete el captcha'); // Mostramos mensaje
               } 
        },
        error:  // En caso de error de comunicación mostraremos mensaje de aviso con el error
            function (xhr, ajaxOptions, thrownError){
                alert('Url: '+this.url+'\n\r’+’Error: '+thrownError);
            }  
        }); // Final de la llamada en AJAX
        // Si la respuesta es true continuará el evento submit, de lo contrario será cancelado
        return $respuesta;
        });
    });
  </script>  
</body>
</html>