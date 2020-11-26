<?php
require_once "./funciones.php";

if(isset($_POST["id"]) && isset($_POST["detalle"])){
    $id = $_POST["id"];
    $detalle = $_POST["detalle"];
    responderReq($id, $detalle);
    header("location: ../vistas/view_soporte.php");
}else{
    echo "error en el post";
}