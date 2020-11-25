<?php
require_once "./funciones.php";

if(isset($_POST["servicio"])){
    $servicio= $_POST["servicio"];
    eliminar_servicios($servicio);
    header("location: ../vistas/admin_listar_servicio.php");
}else{
    echo "error en el post";
}