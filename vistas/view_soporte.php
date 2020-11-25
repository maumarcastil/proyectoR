<?php
require_once "../conexiones/funciones.php"

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>SOPORTE</title>
</head>

<body class="bg-dark text-white text-center">
    <div class="container">
        <h1 class="text-center font-weight-lighter">PANEL SOPORTE</h1><br>


        <div class="row">
            <div class="col-sm-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>




        <div class="w-50 mx-auto ">
            <div class="card bg-dark">
                <div class="card-body">
                    <h5 class="card-title">Opciones</h5>
                    <br>
                    <a href="#" class="btn btn-primary btn-block btn-sm p-2" data-toggle="modal" data-target="#crear_requerimiento">Agregar requerimiento</a>
                    <a href="usuario_listar_req.php" class="btn btn-primary btn-block btn-sm p-2">Listar requerimientos</a>
                </div>
            </div>
        </div>
        <a href="../conexiones/cerrarSession.php"><button class="btn btn-primary btn-lg btn-block">Cerrar sesión</button></a>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>

</html>