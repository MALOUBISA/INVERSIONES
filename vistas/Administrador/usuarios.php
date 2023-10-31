<?php 
    session_start();
    error_reporting(0);

    $validar = $_SESSION['nombre'];

    if( $validar == null || $validar = ''){
        header("Location: login.php");
        die(); 
    }
    require "../../conexion/enlaceUsuarios.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto Nacional de Educacion Tecnologica</title>
    <link rel="icon" type="image/jpg" href="../../logos/logo_pie_de_pagina.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="../../css/styles.css">
     <!-- Enlazamos con bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
	<!--Datatable plugin CSS file -->
	<link rel="stylesheet" href= 
"https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" /> 

	<!--jQuery library file -->
	<script type="text/javascript"
		src="https://code.jquery.com/jquery-3.5.1.js"> 
	</script> 

	<!--Datatable plugin JS library file -->
	<script type="text/javascript"
src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"> 
	</script>  


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
    
    <script type="text/javascript" src="../../js/app.js"></script>

    <!-- HEADER -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-2">
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
    
 
    <!-- TITULO DE LAS PROVINCIAS -->
    <div class="container">
        <div class="row"> 
            <center>
                <div><h2>LISTA DE USUARIOS</h2></div>
            </center>
        </div>
    </div>
    
    

    <!-- TABLA DE INSTITUCIONES DE LA PROVINCIA -->
    <div class="container">
        <div class="row"> 
            <div class="table-responsive">
                <table class="display">
                    <thead style="text-align: center; height: 40px; justify-content: space-between; margin-top: 20px; padding: 10px; background-color: #0E68AF; /*Fondo celeste del encabezado de la tabla*/">
                        <tr class="table-dark">
                            <th>ID</th>
                            <th>NOMBRE DE USUARIO</th>
                            <th>CONTRASEÑA</th>
                            <th>ROL</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listausuarios as $usuario) { ?>
                            <tr>
                                <td><?php echo $usuario["id"];?></td>
                                <td><?php echo $usuario["nombre"];?></td>
                                <td><?php echo $usuario["password"];?></td>
                                <td><?php 
                                    if ($usuario["rol"] == 1){
                                        echo "Administrador";
                                    }if ($usuario["rol"] == 2){
                                        echo "Lector";
                                    }
                                    ?>
                                    
                                </td>
                                <td> 
                                    <form action="" method="post">
                                        <input type="hidden" name="txtID" value="<?php echo $institucion["CUE"];?>">
                                        <input type="submit" class="btn btn-info" value="Seleccionar" name="accion">
                                        <button value="btnElimninar" onclick="return Confirmar('¿Realmente deseas borrar?');" class="btn btn-danger" type="submit" name="accion">Eliminar</button>
                                    </form>

                                </td>
                            </tr>
                        <?php } ?> 
                    </tbody>
                </table>
            </div>
            <?php if($mostrarModal){?>
            <script>
                $("#exampleModal").modal("show");
            </script>
            <?php } ?>
            <script>
                function Confirmar(Mensaje){
                    return (confirm(Mensaje))?true:false;
                }
            </script>
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
    <script> 
		/* Initialization of datatables */ 
		$(document).ready(function () { 
			$('table.display').DataTable(); 
		}); 
	</script> 

</body>
</html>
