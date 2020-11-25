<?php

try {
    include_once("conexion.php");
    global $pdo;

    // (2) Asignar valores a los parametros
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    //creo consulta  Definir SQL
    $query = 'SELECT * FROM usuarios where usuario ="' . $usuario . '"and contrasena ="' . $contrasena . '";';

    // (3) Ejecutar SQL
    $response = mysqli_query($pdo, $query);

    // (4) Recuperar información
    if (!empty($response)) {
        //crea la session de registro y redirige
        $response = mysqli_fetch_assoc($response);
        $_SESSION["user"] = $response;
        var_dump($_SESSION["user"]);

        /* switch ($response["ID_tipo_usuario"]) {
            case '1':
                //1 = administrador  --  redirige a su vista
                header("location: ../vistas/view_admin.php");
                break;
            case '2':
                //2 = soporte
                header("location: ../vistas/view_soporte.php");
                # code...
                break;
            case '3':
                //3 = usuario
                header("location: ../vistas/view_usuario.php");
                # code...
                break;
            default:
                echo "hay un error";
                break;
        } */
    } else {
        //si el login esta mal redirige al inicio
        echo "Hay un error en el login";
        /* header("location: ../index.html"); */
    }
} catch (Exception $e) {
    header("Location:../index.html");
};
