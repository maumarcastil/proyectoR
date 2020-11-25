<?php
require_once "./funciones.php";

if(isset($_POST["usuario"])){
    $usuario = $_POST["usuario"];
    eliminar_usuario($usuario);
    header("location: ../vistas/admin_listar_usuario.php");
}else{
    echo "error en el post";
}