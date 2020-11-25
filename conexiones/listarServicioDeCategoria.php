<?php 
require_once "../conexiones/funciones.php";
if(isset($_POST["idcategoria"])){
    $categoria = $_POST["idcategoria"];
    //echo $categoria;
    listarServicioDeCategoria($categoria);
}else{
    $categoria = 0;
    listarServicioDeCategoria($categoria);
}