<?
  session_start();
  if($_SESSION["success"] == 'asesoria'){
      echo "<!doctype html>
            <html lang='en'>
              <head>
                <meta charset='utf-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>

                <title>Prueba gratis 30 días</title>

                <!-- Theme CSS file -->
                <link rel='stylesheet' type='text/css' href='css/theme.min.css' />
              </head>
              <body >
                <div class='DescargarDemo'>
              
              <nav class='navbar ' role='navigation'>
                <div >
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class='navbar-header'>
                    <a class='navbar-brand' style='margin-bottom: 30px;' href='index.html'>
                      <img src='img/logo-alt-w-black.png' />
                    </a>
                  </div>
                </div>
              </nav>
            <div class='container' >

               <center>
                <h1 style='margin-bottom: 88px'>
                      Gracias por agendar <span style='color:#ff2347;'>sesión</span>
                    </h1>
                  <form class='form-inline' id='pruebaG' action='index.html' method='POST'>
                    

                    <button class='Input-Submit btn-pill btn-pill-success btn-pill-lg customFadeInUp' type='submit'>Volver al inicio</button>

                    
                  </form>

                  <h4>Únete a la comunidad de restaurantes inteligentes</h4>
            <img class='img-responsive' src='img/clientes.png'/>
                       </center>
              
            </div>
                <!-- include jQuery (required) and the theme JS file -->
                <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
                <script src='css/theme.min.js'></script>
                <script type='text/javascript' src='js/apiFunctions.js'></script>
              </body>
            </html>";
  } else{
    echo "<h1>404 NOT FOUND</h1>";
  }
?>
