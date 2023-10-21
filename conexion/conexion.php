<?php
$servidor = "mysql:dbname=inversiones;host=127.0.0.1";
$usuario="root";
$password="";

try {
    $pdo=new PDO($servidor,$usuario,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "conectado..";
    
} catch (PDOException $e) {

    echo "conexion mala :( ".$e->getMessage;
    
}

?>