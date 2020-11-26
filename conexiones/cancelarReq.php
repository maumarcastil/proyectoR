<?php
require_once "./funciones.php";

if(isset($_POST["req"])){
    $req = $_POST["req"];
    cancelar_req($req);
    //var_dum($req)
    header("location: ../vistas/view_soporte.php");
}else{
    echo "error en el post";
}