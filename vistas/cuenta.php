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
    <link rel="stylesheet" href="../css/estilo.css">
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
                    <li><a href="../index.php" class="active">INICIO</a></li>
                    <li><a href="cuenta.php">CUENTA</a></li>
                    <li><a href="#">INDEFINIDO</a></li>
                    <li><a href="#">INDEFINIDO</a></li>
                    <li><a href="#">INDEFINIDO</a></li>
                </ul>
            </div>
        </div>
    </header>

    <section id="hero-section"></section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="../app.js"></script>


    <!-- INFORMACION DE USUARIO-->
    <div class="container mt-5">
        <div class="card border-primary mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="../img/user.webp" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">INFORMACION DE USUARIO</h5>
                  <p class="card-text"><b>Rol: </b>
                    <?php 
                      if ($_SESSION['rol'] == 1){
                        echo "Administrador";
                      }else{
                        echo "Lector";
                      }
                    ?>
                  </p>
                  <p class="card-text"><b>Nombre de usuario: </b><?php echo $_SESSION['nombre']; ?></p>
                  <p class="card-text"><b>Contraseña: </b><?php echo $_SESSION['password']; ?></p>
                  <button type="button" class="btn btn-outline-primary">MODIFICAR</button>
                </div>
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
                            <img src="../logos/logo_pie_de_pagina.png" alt="Logo De pie de pagina" width="100">
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
                    <a href="https://www.facebook.com/INET.ETP" target="_blank"><img src="../Redes/facebook.svg" alt="Facebook" class="icon"></a>
                    <a href="https://twitter.com/INETetp" target="_blank"><img src="../Redes/twitter.svg" alt="Twitter" class="icon"></a>
                    <a href="https://www.youtube.com/channel/UCKpd-B8McDUTwc_3kbZm18g" target="_blank"><img src="../Redes/youtube.svg" alt="YouTube" class="icon"></a>
                    <a href="https://www.instagram.com/inet_etp/" target="_blank"><img src="../Redes/instagram.svg" alt="Instagram" class="icon"></a>
                    <a href="https://www.tiktok.com/@inetetp" target="_blank"><img src="../Redes/tiktok.svg" alt="TikTok" class="icon"></a>
                  </div>
              </div>
              <div class="col-lg-3">
                 <div class="footer-image">
                    <img src="../logos/ministerio.png" alt="Última imagen" width="250px">
                  </div>
              </div>
              </div>
        </div>
    </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>