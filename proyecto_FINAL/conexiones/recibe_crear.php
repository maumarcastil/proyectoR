<?php


    include_once("conexion.php");
    
    //$pdo = GetConexionBD();
    
    // (1) Asignar valores a los parametros
    $nombre = $_POST["nombre_re"]." ".$_POST["apellido_re"] ;
    $direccion = $_POST["direccion_re"];
    $telefono = $_POST["telefono_re"];
    $ID_tipo_usuario= $_POST["ID_tipo_usuario"];
    $codigo="12345";
    $usuario = $_POST["usuario_re"];
    $contrasena = $_POST["contrasena_re"];
    $email = $_POST["email_re"];
    
    //print_r($_POST);
    
    //$comando  = $pdo ->query("INSERT INTO usuarios (nombre_completo, direccion, telefono,ID_tipo_usuario, codigo, usuario, contrasena, email, estado) VALUES ('juan ', 'cll34c-40', '322222',2,'1212','jvega28','123','juanchito@hotmail.com',1)");
    try {
        $comando  = $pdo ->query("INSERT INTO requerimientos (nombre_completo, direccion, telefono,ID_tipo_usuario, codigo, usuario, contrasena, email, estado) VALUES ('$nombre','$direccion','$telefono','$ID_tipo_usuario','$codigo','$usuario','$contrasena','$email',1)");
      } catch(PDOException $e) {
        echo $sql . "<br>kdhfvgfjvhefkjvb" . $e->getMessage();
      }
    
    

?>