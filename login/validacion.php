<?php
    $nombre=$_POST['nombre'];
    $password=$_POST['password'];
    session_start();
    $_SESSION['nombre']=$nombre;
    $_SESSION['password']=$password;
    

    $conexion=mysqli_connect("localhost","root","","inversiones");
    $consulta= "SELECT * FROM user WHERE nombre='$nombre' AND password='$password'";
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_fetch_array($resultado);

    if($filas['rol'] == 1){ //admin
        header('Location: ../vistas/Administrador/principal.php');
    } else if ($filas['rol'] == 2){//lector
        header('Location: ../vistas/Lector/principal.php');
    } else{
        header('Location: login.php');
        session_destroy();
    }
    
    $_SESSION['rol']=$filas['rol'];
?>