<?php
require_once "./funciones.php";

if(isset($_POST["req"])){
    $req = $_POST["req"];
    aceptar_req($req);
    header("location: ../vistas/view_soporte.php");
}else{
    echo "error en el post";
}