<?php
require_once "./funciones.php";

if(isset($_POST["categoria"])){
    $categoria = $_POST["categoria"];
    eliminar_categoria($categoria);
    header("location: ../vistas/admin_listar_categorias.php");
}else{
    echo "error en el post";
}