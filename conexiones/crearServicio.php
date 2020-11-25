<?php
require_once "./funciones.php";

if(isset($_POST["servicio"])){
    $servicio = $_POST["servicio"];
    $categoria = $_POST["idcategoria"]; 
    crear_servicio($servicio, $categoria);
    header("location: ../vistas/view_admin.php");
}else{
    echo "error en el post";
}