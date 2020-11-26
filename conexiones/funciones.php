<?php
require_once "conexion.php";



function existe_usuario(){
if(isset($_SESSION["user"])){
    switch ($_SESSION["user"]["ID_tipo_usuario"]) {
        case '1':
            //1 = administrador  --  redirige a su vista
            header("location: ./vistas/view_admin.php");
            break;
        case '2':
            //2 = soporte
            header("location: ./vistas/view_soporte.php");
            # code...
            break;
        case '3':
            //3 = usuario
            header("location: ./vistas/view_usuario.php");
            # code...
            break;
        default:
            echo "hay un error";
            break;
    }
}
}

function listarServicioDeCategoria($categoria)
{
    global $pdo;
    $query = "SELECT * FROM servicio where ID_categorias =  $categoria";
    $sql = mysqli_query($pdo, $query);
    $response = mysqli_fetch_all($sql);

    $html = '<label for="exampleFormControlSelect1">Servicios</label>
        <select class="form-control" name="servicio" id="select_servicio">';
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





//USUARIO 
function listar_usuario()
{
    global $pdo;
    $query ="SELECT * FROM usuarios";
    $resultado = mysqli_query($pdo,$query);
    return mysqli_fetch_all($resultado);
}

function eliminar_usuario($id)
{
    global $pdo;
    $query = 'DELETE FROM usuarios where id ='.$id;
    mysqli_query($pdo, $query);
    echo "<script>alert('Ha sido Borrado')</script>";
}





//SERVICIOS
function crear_servicio($servicio,$categoria){
    global $pdo;
    $query = "INSERT INTO `servicio` ( `ID_categorias`, `servicio`) VALUES ( '$categoria', '$servicio');";
    
    mysqli_query($pdo, $query);
    echo '<script>alert("Se creo la categoria")</script>';
}
function listar_servicios()
{
    global $pdo;
    $query ="SELECT * FROM servicio";
    $resultado = mysqli_query($pdo,$query);
    return mysqli_fetch_all($resultado);
}

function eliminar_servicios($id)
{
    global $pdo;
    $query = 'DELETE FROM servicio where id ='.$id;
    mysqli_query($pdo, $query);
    echo "<script>alert('Ha sido Borrado')</script>";
}


//INSERT INTO `requerimientos` (`usuario solicitante`, `categoria`, `servicio`, `estado`, `descripcion solicitud`, `ubicacion`) VALUES ('16', '1', '1', 'REPORTADO', 'DESCRIP', 'UBI');


//REQUERIMIENTO
function crear_requerimiento($categoria, $servicio,$descripcion, $ubicacion){
    global $pdo;
    $id = $_SESSION["user"]["id"];
    $query = "INSERT INTO `requerimientos` (`usuario solicitante`, `categoria`, `servicio`, `estado`, `descripcion solicitud`, `ubicacion`) VALUES ('$id', '$categoria', '$servicio', 'REPORTADO', '$descripcion', '$ubicacion');";
    mysqli_query($pdo, $query);
}


function listar_requerimientos()
{
    global $pdo;
    $id = $_SESSION["user"]["id"];
    $query ="SELECT * FROM requerimientos where `usuario solicitante` = '$id'";
    $resultado = mysqli_query($pdo,$query);
    return mysqli_fetch_all($resultado);
}

function listar_requerimientos_soporte()
{
    global $pdo;
    $query ="SELECT * FROM requerimientos WHERE `usuario soporte` IS NULL;";
    $resultado = mysqli_query($pdo,$query);
    return mysqli_fetch_all($resultado);
}

function listar_requerimientos_aceptados()
{
    global $pdo;
    $id = $_SESSION["user"]["id"];
    $query ="SELECT * FROM requerimientos WHERE `usuario soporte` ='$id' and `estado` <> 'CANCELADO';";
    $resultado = mysqli_query($pdo,$query);
    return mysqli_fetch_all($resultado);
}


function aceptar_req($req){
    global $pdo;
    $id = $_SESSION["user"]["id"];
    $query ="UPDATE `requerimientos` SET `usuario soporte` = '$id', `estado` = 'EN PROCESO', `fecha atencion` = now() WHERE (`codigo` = '$req');";
    mysqli_query($pdo,$query);
}

function cancelar_req($req){
    global $pdo;
    $id = $_SESSION["user"]["id"];
    $query ="UPDATE `requerimientos` SET `usuario soporte` = '$id', `estado` = 'CANCELADO', `fecha finalizacion` = now() WHERE (`codigo` = '$req');";
    mysqli_query($pdo,$query);
}
