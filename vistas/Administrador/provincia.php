<?php 
    session_start();
    error_reporting(0);

    $validar = $_SESSION['nombre'];

    if( $validar == null || $validar = ''){
        header("Location: login.php");
        die(); 
    }
    require "../../conexion/botones.php";
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
    
    <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">
                    <input type="hidden" required name="txtID" value="<?php echo $txtID;?>" placeholder="" id="txtID" require="">

                    <div class="form-group col-md-4">
                        <label for="">CUE:</label>
                        <input type="text" class="form-control <?php echo (isset($error["CUE"]))?"is-invalid":"";?>"  name="CUE" value="<?php echo $CUE;?>" placeholder="" id="txtCUE" require="">
                        <div class="invalid-feedback">
                            <?php echo (isset($error["CUE"]))?$error["CUE"]:""; ?>
                        </div>

                        <br>

                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Descripcion:</label>
                        <input type="text" class="form-control <?php echo (isset($error["descripcion"]))?"is-invalid":"";?>" name="descripcion" value="<?php echo $descripcion;?>" placeholder="" id="txtApellidoP" require="">
                        <div class="invalid-feedback">
                            <?php echo (isset($error["descripcion"]))?$error["descripcion"]:""; ?>
                        </div>
                    <br>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Proveedor:</label>
                        <input type="text" class="form-control <?php echo (isset($error["proveedor"]))?"is-invalid":"";?>" name="proveedor" value="<?php echo $proveedor;?>" placeholder="" id="txtApellidoM" require="">
                        <div class="invalid-feedback">
                            <?php echo (isset($error["proveedor"]))?$error["proveedor"]:""; ?>
                        </div>
                    <br>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Precio:</label>
                        <input type="number" class="form-control <?php echo (isset($error["precio"]))?"is-invalid":"";?>" name="precio" value="<?php echo $precio;?>" placeholder="" id="txtCorreo" require="">
                        <div class="invalid-feedback">
                            <?php echo (isset($error["precio"]))?$error["precio"]:""; ?>
                        </div>
                    <br>
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="">Existencia:</label>
                        <input type="text" class="form-control <?php echo (isset($error["existencia"]))?"is-invalid":"";?>" name="existencia" value="<?php echo $existencia;?>" placeholder="" id="txtFoto" require="">
                        <div class="invalid-feedback">
                            <?php echo (isset($error["existencia"]))?$error["existencia"]:""; ?>
                        </div>
                    <br>
                    </div>
                </div>
            </div>
                <div class="modal-footer">
                    <button value="btnAgregar"  <?php echo $accionAgregar;?> class="btn btn-success" type="submit" name="accion">Agregar</button>
                    <button value="btnModificar" <?php echo $accionModificar;?> class="btn btn-warning" type="submit" name="accion">Modificar</button>
                    <button value="btnElimninar" onclick="return Confirmar('¿Realmente deseas borrar?');" <?php  echo $accionEliminar;?> class="btn btn-danger" type="submit" name="accion">Eliminar</button>
                    <button value="btnCancelar" <?php echo $accionCancelar;?> class="btn btn-primary" type="submit" name="accion">Cancelar</button>
                </div>
            </div>
    </div>
    </div>
    <br/>
    <br/>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Agregar Registro + </button>
    <br/>
    <br/>         

    </form>
</div>

    <!-- TITULO DE LAS PROVINCIAS -->
    <div class="container">
        <div class="row" style="display: flex; justify-content: center"> 
            <!--IMAGEN DE LA PROVINCIA-->
            <div class="col-lg-1 col-sm-1" >
                <img src="../../Provincias/<?php echo $prov?>.png" alt="<?php echo $prov?>" width="100px" class="img-fluid">
            </div>
            <div class="col-lg-1">
            <!--NOMBRE DE LA PROVINCIA-->
            </div>
            <div class="col-lg-3 col-sm-1" style="position: relative">
                <div style="position: absolute; top: 25%;  ">
                    <h2><?php echo $prov?></h2>
                </div>
            </div>
        </div>
    </div>
    

    <!-- BOTONES DE FILTRADO SEGUN LA LINEA -->
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-1">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="button">Button</button>
                    <button class="btn btn-primary" type="button">Button</button>
                </div>

            </div>
        </div>
    </div>
    

    <!-- TABLA DE INSTITUCIONES DE LA PROVINCIA -->
    <div class="container">
        <div class="row"> 
            <div class="table-responsive">
                <table class="display">
                    <thead style="text-align: center; height: 40px; justify-content: space-between; margin-top: 20px; padding: 10px; background-color: #0E68AF; /*Fondo celeste del encabezado de la tabla*/">
                        <tr class="table-dark">
                            <th>CUE</th>
                            <th>NOMBRE ESCUELA</th>
                            <th>LOCALIDAD</th>
                            <th>LÍNEA</th>
                            <th>PARA...</th>
                            <th>ACREDITADO</th>
                            <th>EJECUTADO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listaescuela as $institucion) { ?>
                            <tr>
                                <td><?php echo $institucion["CUE"];?></td>
                                <td><?php echo $institucion["Nombre_Escuela"];?></td>
                                <td><?php echo $institucion["Localidad"];?></td>
                                <td><?php echo $institucion["Linea"];?></td>
                                <td><?php 
                                    if ($institucion["Linea"] == "FONDO ESCOLAR - Programa 39 - INET"){?>
                                        <a href=""><img src="../../logos/tecnologia.png" alt="" width="50px" class="img-responsive"></a>
                                    <?php }
                                    if ($institucion["Linea"] == "PLAN DE MEJORA INSTITUCIONAL ? ETP ?Entornos Formativos"){?>
                                        <a href=""><img src="../../logos/tecnologia.png" alt="" width="50px" class="img-responsive"></a>
                                    <?php }
                                    if ($institucion["Linea"] == "PMI EQUIPAMIENTO INSTITUCIONAL"){?>
                                        <a href=""><img src="../../logos/tecnologia.png" alt="" width="50px" class="img-responsive"></a>
                                    <?php }
                                    if ($institucion["Linea"] == "EQUIPAMIENTO DE RESIDENCIAS Y/O ALBERGUES ESTUDIANTILES"){?>
                                        <a href=""><img src="../../logos/equipamiento.png" alt="" width="50px" class="img-responsive"></a>
                                    <?php }?>
                                    
                                </td>
                                <td>$<?php echo $institucion["Acreditado"];?></td>
                                <td>$<?php echo $institucion["Ejecutado"];?>
                                    <?php
                                        if ($institucion["Ejecutado"] == 0){
                                            $porcentaje=0;
                                        }else{
                                            $porcentaje = round($institucion["Ejecutado"]*100/$institucion["Acreditado"],2);//Regla de 3 simple
                                        }
                                        
                                    ?> 
                                    <div class="progress" role="progressbar"  aria-valuemin="0" aria-valuemax="10" style="height: 15px">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:<?php echo $porcentaje ?>%"><?php echo $porcentaje."%" ?></div>
                                    </div>         
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
