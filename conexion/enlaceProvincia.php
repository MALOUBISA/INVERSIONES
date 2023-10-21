<?php
    $prov=$_GET["prov"];
    include ("conexion.php");
    $sentencia= $pdo->prepare("SELECT * FROM instituciones WHERE `Provincia` = '{$prov}'");

    $sentencia->execute();
    $listaescuela=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    $txtID=(isset($_POST["txtID"]))?$_POST["txtID"]:"";
?>