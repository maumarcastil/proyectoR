<?php
require_once "./funciones.php";

if(isset($_POST["servicio"])){
    $servicio = $_POST["servicio"];
    $categoria = $_POST["idcategoria"]; 
    $descripcion = $_POST["descripcion"];
    $ubicacion = $_POST["ubicacionenlaempresa"];


    crear_requerimiento($categoria, $servicio,$descripcion, $ubicacion);
    /* header("location: ../vistas/view_usuario.php"); */
}else{
    echo "error en el post";
}