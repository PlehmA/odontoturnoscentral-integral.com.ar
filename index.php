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
    <link rel="icon" type="image/png" href="Images/logo5.png">
    <link rel="manifest" href="Images/manifest.json">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lemonada:400,600" rel="stylesheet">
    <title>Central de Turnos</title>
</head>
<body>
    <div class="home-wrapper">
        <header class="fixed-top pb-0">
            <div class="container">
                <img src="Images\logo4.png" alt="Logo Central de Turnos" class="imgheader img-responsive float-left pt-1 w-25 h-25 pb-2"/><!--div><h3 class="text-primary float-left">Central de Turnos</h3></div><img src="Images\name.png" alt="Logo Central de Turnos" class="imgnombreheader"/-->
                <nav class="float-right">
                        <a href="#home" class="active" style="text-decoration: none;">HOME</a>
                        <a href="#conocenos" style="text-decoration: none;">CONOCENOS</a>
                        <a href="#turnos" style="text-decoration: none;">TURNOS</a>
                        <a href="#faq" style="text-decoration: none;">¿DUDAS?</a>
                </nav>
            </div>
        </header>
        <section id="home" class="container">
            <h1 class="embed-responsive">CENTRAL DE TURNOS</h1>
            <div class="divider">

            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <div class="social">
                <a href="https://www.facebook.com/odontopraxisamericana" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-github" aria-hidden="true"></i></a>
            </div>
        </section>
    </div>


    <section id="conocenos">
        <h2>Conózcanos un poco más. </h2>
        <div class="container">
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, repellendus quia illo iusto veniam totam tenetur explicabo minima voluptate mollitia eaque enim consectetur eveniet neque molestias, libero aliquid reprehenderit dolore!</span><span>Illo mollitia quas, voluptatum quis cumque totam doloribus temporibus amet voluptates ipsam facere dolore fuga optio eligendi! Ad commodi, aut nulla alias deleniti eveniet saepe consequatur, placeat fugiat, hic sit.</span></p>
        </div>
        </div>
    </section>
    <section id="turnos">
            <h2>TURNOS</h2>
        <div class="col-8 row mx-auto">
            <div class="col-2"></div>
            <div class="col-4 text-center box">
                <img src="Images/checklist-1622517_640.png" alt="Íconos redondeados" class="w-50 h-50 mb-3">
                    <h3>Formulario de turnos</h3>
                    <p>Para poder solicitar su turno <a href="turnos.php"><b>ingrese aquí</b></a>.</p>
            </div>
            <div class="col-4 text-center box">
            <i class="ion-social-whatsapp fa-5x text-success"></i>
                <h3>Whatsapp!</h3>
                <p>Experimenta nuestra nueva implementación de turnos. <b><i class="fa fa-whatsapp fa-lg text-success"></i>15-6304-2692</b></p>
            </div>
        </div>
    </section>
<section id="faq">
        <h2 class="mb-0 text-center">¿DUDAS?</h2>
        <p style="font-size: 10px;" class="mb-5 text-center">¡Contactanos!</p>
        <form action="contact.php" method="POST" class="mt-4 ml-5" id="frmcaptcha">
            <div>
                <input type="email" placeholder="Tu email..." name="email" required id="input">
            </div>
            <div>
                <textarea rows="10" placeholder="Tu mensaje..." name="texto" required id="input"></textarea>
            </div>
            <div class="g-recaptcha" data-sitekey="6LecqygUAAAAALl4ic8ftZWFH-pMxBKRdAH2deLo"></div>
           <input type="submit" class="btn btn-sm mt-4" id="button" name="enviar">
        </form> 
</section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.2029826891785!2d-58.38817698432773!3d-34.599028380460666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac77f523739%3A0x86ae2e77c20b46a0!2sAv.+C%C3%B3rdoba+1345%2C+C1015+CABA!5e0!3m2!1ses!2sar!4v1498484639459" width="100%" height="200px" frameborder="0" style="border:0" allowfullscreen></iframe>
    <footer> © 2017 <strong>Central de Turnos</strong>, Todos los Derechos Reservados </footer>
    <div id="buttontop" class="fixed-bottom text-right mb-5 px-5">
    <a href="#home" class="text-success"><span><i class="fa fa-arrow-circle-o-up fa-3x" aria-hidden="true"></i></span></a>
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
