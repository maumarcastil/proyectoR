<?php
require_once "./funciones.php";

if(isset($_POST["categoria"])){
    $categoria = $_POST["categoria"];
    crear_categoria($categoria);
    header("location: ../vistas/view_admin.php");
}else{
    echo "error en el post";
}