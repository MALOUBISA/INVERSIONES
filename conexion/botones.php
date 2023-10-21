<?php

include("enlaceProvincia.php")

$txtID=(isset($_POST["txtID"]))?$_POST["txtID"]:"";
$codigo=(isset($_POST["codigo"]))?$_POST["codigo"]:"";
$descripcion=(isset($_POST["descripcion"]))?$_POST["descripcion"]:"";
$proveedor=(isset($_POST["proveedor"]))?$_POST["proveedor"]:"";
$precio=(isset($_POST["precio"]))?$_POST["precio"]:"";
$existencia=(isset($_POST['existencia']))?$_POST['existencia']:"";

$accion=(isset($_POST["accion"]))?$_POST["accion"]:"";

$error=array();

$accionAgregar="";
$accionModificar=$accionEliminar=$accionCancelar="disabled";
$mostrarModal=false;

    
switch ($accion) {
    case 'btnAgregar':

        if ($codigo=="") {
            $error["codigo"]="Escribe el codigo";
        }
        if ($descripcion=="") {
            $error["descripcion"]="Escribe la descripcion";
        }
        if ($proveedor=="") {
            $error["proveedor"]="Escribe el proveedor";
        }
        if ($precio=="") {
            $error["precio"]="Escribe el precio";
        }
        if ($existencia=="") {
            $error["existencia"]="Escribe la existencia";
        }
        if (count($error)>0) {
            $mostrarModal=true;
            break;
        }

        $sentencia=$pdo->prepare("INSERT INTO producto(codproducto,descripcion,proveedor,precio,existencia) 
        values (:codigo,:descripcion,:proveedor,:precio,:existencia)");

        $sentencia->bindParam(":codigo",$codigo);
        $sentencia->bindParam(":descripcion",$descripcion);
        $sentencia->bindParam(":proveedor",$proveedor);
        $sentencia->bindParam(":precio",$precio);
        $sentencia->bindParam(':existencia',$existencia);
        $sentencia->execute();
        header("Location: index.php");
    break;

    case 'btnModificar':

        $sentencia=$pdo->prepare(" UPDATE producto SET 
        codproducto=:codigo,
        descripcion=:descripcion,
        proveedor=:proveedor,
        precio=:precio,
        existencia=:existencia WHERE
        codproducto=:id");

        $sentencia->bindParam(":codigo",$codigo);
        $sentencia->bindParam(":descripcion",$descripcion);
        $sentencia->bindParam(":proveedor",$proveedor);
        $sentencia->bindParam(":precio",$precio);
        $sentencia->bindParam(":existencia",$existencia);
        $sentencia->bindParam(":id",$txtID);
        $sentencia->execute();

        header("Location: index.php");

        echo $txtID;
        echo "Presionaste btnModificar";
    break;

    case 'btnElimninar':

        $sentencia=$pdo->prepare(" DELETE FROM producto WHERE codproducto=:id");
        $sentencia->bindParam(":id",$txtID);
        $sentencia->execute();
        header("Location: index.php");

        echo $txtID;
        echo "Presionaste btnElimninar";
    break;

    case 'btnCancelar':
        header("Location: index.php");
    break;

    case 'Seleccionar':
        $accionAgregar="disabled";
        $accionModificar=$accionEliminar=$accionCancelar="";
        $mostrarModal=True;

        $sentencia=$pdo->prepare(" SELECT * FROM instituciones WHERE CUE=:id");
        $sentencia->bindParam(":id",$txtID);
        $sentencia->execute();
        $producto=$sentencia->fetch(PDO::FETCH_LAZY);

        $codigo=$producto["codproducto"];
        $descripcion=$producto["descripcion"];
        $proveedor=$producto["proveedor"];
        $precio=$producto["precio"];
        $existencia=$producto["existencia"];
   
    break;
}


?>