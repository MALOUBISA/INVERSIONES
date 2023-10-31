<?php
    session_start();
    error_reporting(0);

    $validar = $_SESSION['nombre'];

    if( $validar == null || $validar = ''){
        header("Location: login.php");
        die(); 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Nacional de Educacion Tecnologica</title>
    <link rel="icon" type="image/jpg" href="logo_pie_de_pagina.png">
    <link rel="stylesheet" href="../../css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
 
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
     <!-- Enlazamos con bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <!-- BARRA DE NAVEGACION -->
    <header class="header-area">
        <div class="header-container">
            <div class="site-logo">
                <a href="#">INET</a>
            </div>
            <div class="mobile-nav">
                <i class="fas fa-bars"></i>
            </div>
            <div class="site-nav-menu">
                <ul class="primary-menu">
                    <li><a href="principal.php" class="active">INICIO</a></li>
                    <li><a href="../cuenta.php">CUENTA</a></li>
                    <li><a href="provincia.php">MI PROVINCIA</a></li>
                    <li><a href="todas.html">TODAS LAS INSTITUCIONES</a></li>
                    <li><a href="usuarios.php">USUARIOS</a></li>
                </ul>
            </div>
        </div>
    </header>

    <section id="hero-section"></section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../../js/app.js"></script>
    

    <!-- HEADER -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-8">
                <div class="logo">
                    <a href="https://www.inet.edu.ar/index.php/niveles-educativos/educacion-profesional-secundaria/">
                        <img src="../../logos/logo_encabezado.jpg" alt="Logo de encabezado" width="400px" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-1"></div>
            <div class="col-lg-3 col-sm-4">
                <div class="social-icons">
                    <a href="https://www.facebook.com/INET.ETP" target="_blank"><img src="../../Redes/facebook.svg" alt="Facebook" class="icon"></a>
                    <a href="https://twitter.com/INETetp" target="_blank"><img src="../../Redes/twitter.svg" alt="Twitter" class="icon"></a>
                    <a href="https://www.youtube.com/channel/UCKpd-B8McDUTwc_3kbZm18g" target="_blank"><img src="../../Redes/youtube.svg" alt="YouTube" class="icon"></a>
                    <a href="https://www.instagram.com/inet_etp/" target="_blank"><img src="../../Redes/instagram.svg" alt="Instagram" class="icon"></a>
                    <a href="#" target="_blank"><img src="../../Redes/gmail.svg" alt="Correo Electrónico" class="icon"></a>
                    <a href="https://www.tiktok.com/@inetetp" target="_blank"><img src="../../Redes/tiktok.svg" alt="TikTok" class="icon"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- CARRUSEL -->
    <div class="container">
        <div class="row">
            <div class="galeria">
                <img src="../../escuelas/Escuela1.jpg" alt="">
                <img src="../../escuelas/Escuela2.jpg" alt="">
                <img src="../../escuelas/Escuela3.jpg" alt="">
            </div>
        </div>
    </div>    
    <!-- PAGINAS SECUNDARIAS -->
    <div class="container">
        <div class="row" >
          <div class="col-lg-6 col-md-2 col-sm-2" style="justify-content: center">
            <div style="text-align: center;"><a href="#" ><img src="../../logos/cercanos.png" alt="" width="200px"></a></div>
            <br>
            <div style="text-align: center;"><h4>Instituciones Cercanas</h4></div>
          </div>
          <div class="col-lg-6 col-md-2 col-sm-2" style="justify-content: center">
            <div style="text-align: center;"><a href="#"><img src="../../logos/jurisdiccion.png" alt="" width="200px"></a></div>
            <br>
            <div style="text-align: center;"><h4>Instituciones de la Jurisdiccion</h4></div>
          </div>
        </div>
        <div class="row" >
          <div class="col-lg-6 col-md-2 col-sm-2" style="justify-content: center">
            <div style="text-align: center;"><a href="todas.html" ><img src="../../logos/pais.png" alt="" width="200px"></a></div>
            <br>
            <div style="text-align: center;"><h4>Todas las instituciones</h4></div>
          </div>
          <div class="col-lg-6 col-md-2 col-sm-2" style="justify-content: center">
            <div style="text-align: center;"><a href="usuarios.php"><img src="../../logos/usuario.png" alt="" width="200px"></a></div>
            <br>
            <div style="text-align: center;"><h4>Usuarios</h4></div>
          </div>
        </div>
        </div>
        
    </div>  

    <!-- PIE DE PAGINA -->
  <footer>
    <div class="container-fluid">
        <div class="row">
              <div class="col-lg-3">
                    <div class="contact-info">
                        <a href="https://www.inet.edu.ar/index.php/niveles-educativos/educacion-profesional-secundaria/">
                            <img src="../../logos/logo_pie_de_pagina.png" alt="Logo De pie de pagina" width="100">
                        </a>
                    </div>
              </div>
              <div class="col-lg-3">
                    <div class="contact-details">
                        <p>Saavedra 789 - C1229ACE</p>
                        <p>Tel. (+54) 11 4129-2000</p>
                    </div>
              </div>
              <div class="col-lg-3">
                <div class="social-icons">
                    <a href="https://www.facebook.com/INET.ETP" target="_blank"><img src="../../Redes/facebook.svg" alt="Facebook" class="icon"></a>
                    <a href="https://twitter.com/INETetp" target="_blank"><img src="../../Redes/twitter.svg" alt="Twitter" class="icon"></a>
                    <a href="https://www.youtube.com/channel/UCKpd-B8McDUTwc_3kbZm18g" target="_blank"><img src="../../Redes/youtube.svg" alt="YouTube" class="icon"></a>
                    <a href="https://www.instagram.com/inet_etp/" target="_blank"><img src="../../Redes/instagram.svg" alt="Instagram" class="icon"></a>
                    <a href="https://www.tiktok.com/@inetetp" target="_blank"><img src="../../Redes/tiktok.svg" alt="TikTok" class="icon"></a>
                  </div>
              </div>
              <div class="col-lg-3">
                 <div class="footer-image">
                    <img src="../../logos/ministerio.png" alt="Última imagen" width="250px">
                  </div>
              </div>
              </div>
        </div>
    </div>
    </footer>
    
</body>
</html>
