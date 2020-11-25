<?php
require_once "conexion.php";


function listarServicioDeCategoria($categoria)
{
    global $pdo;
    $query = "SELECT * FROM tipos_de_servicios where ID_categorias =  $categoria";
    $sql = mysqli_query($pdo, $query);
    $response = mysqli_fetch_all($sql);

    $html = '<label for="exampleFormControlSelect1">Servicios</label>
        <select class="form-control" name="select_servicio" id="select_servicio">';
    if (empty($response)) {
        $html = $html . "<option value=0>No hay opciones disponibles </option></select>";
        echo $html;
        die();
    } else {
        foreach ($response as $res) {
            $html = $html . "<option value='" . $res[0] . "'>" . $res[2] . "</option>" . "<br>";
        }
        $html = $html . "</select>";
        echo $html;
        die();
    }
}


/* Categorias */
function crear_categoria($categoria){
    global $pdo;
    $query = "INSERT INTO `categorias` (`categoria`) VALUES ('$categoria');";
    mysqli_query($pdo, $query);
    echo '<script>alert("Se creo la categoria")</script>';
}

function listar_categorias()
{
    global $pdo;
    $query = "SELECT * FROM categorias";
    $resultado = mysqli_query($pdo, $query);
    return mysqli_fetch_all($resultado);
}

function eliminar_categoria($id)
{
    global $pdo;
    $query = 'DELETE FROM categorias where id ='.$id;
    mysqli_query($pdo, $query);
    echo "<script>alert('Ha sido Borrado')</script>";
}