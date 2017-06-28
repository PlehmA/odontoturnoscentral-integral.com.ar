<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/c2a2b83e4d.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.css">
    <link rel="stylesheet" href="css/normalize.css">
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
	<title>Turnos</title>
</head>
<body>
<div class="container">
<div class="card-img-top">
	<h2>Solicitud de Turnos</h2>
	<img src="Images/logo2.png" alt="" class="img-fluid mx-auto" style="height: 50%; width: 50%;">
</div>
<div>
	<h6>Para solicitar turno de atención complete el siguiente formulario y un operador se comunicará a la brevedad.</h6>
</div>
<div>
	<form action="" method="POST">
		<div>
			<label for="">Nombre/s y Apellido/s: </label>
		<input type="text">
		</div>
		<div>
			<label for=""></label>
		<input type="text">
		</div>
		<div>
			<label for=""></label>
		<input type="text">
		</div>
		<div>
			<label for=""></label>
		<input type="text">
		</div>
		<div>
			<label for=""></label>
		<input type="text">
		</div>
		<div>
			<label for=""></label>
		<input type="text">
		</div>
		<div>
			<select name="" id="">
				<option value=""></option>
			</select>
		</div>
		<div>
			<label for=""></label>
			<textarea name=""></textarea>
		</div>
		
		<table class="table">
		<thead>
			<tr>
				<th>Seleccione su día y horario disponible para solicitar turno</th>
				<th>Mañana 8.30 a 12.30 hs</th>
				<th>Tarde 14 a 20 hs</th>
			</tr>
		</thead>
			<tbody>
				<tr>
					<td>Lunes</td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td>Martes</td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td>Miercoles</td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td>Jueves</td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td>Viernes</td>
					<td><input type="checkbox"></td>
					<td><input type="checkbox"></td>
				</tr>
			</tbody>
		</table>
		<p>Nota: Para cirugía, endodoncia y periodoncia, debe traer ORDEN DE DERIVACION</p>

		<div class="g-recaptcha" data-sitekey="6LdxEicUAAAAANxW4-RuWc-D6p_adeKmbcneTHvR"></div>
           <div>
           		<input type="reset">
           		<input type="submit" name="enviar">
           </div>
	</form>
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
                $("#g-recaptcha-response","#frmcaptcha2").remove();
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