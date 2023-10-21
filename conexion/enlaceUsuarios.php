<?php
    include ("conexion.php");
    $sentencia= $pdo->prepare("SELECT * FROM user WHERE 1");

    $sentencia->execute();
    $listausuarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    $txtID=(isset($_POST["txtID"]))?$_POST["txtID"]:"";
?>