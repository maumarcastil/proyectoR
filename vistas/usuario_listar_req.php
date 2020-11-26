<?php
require_once "../conexiones/funciones.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>ADMIN</title>
</head>

<body class="bg-dark text-white">

    <!-- vista pagina -->
    <div class="container">

        <h1 class="text-center font-weight-lighter">Lista requerimientos</h1><br>
        <hr>

        <div>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Respuesta</th>
                        <th scope="col">Estado</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $lista = listar_requerimientos();
                    foreach ($lista as $x) {
                        echo '<tr><th scope="row">' . $x[0] . '</th>';
                        echo '<td>' . $x[6] . '</td>';
                        echo '<td>' . isset($x[8]) ? $x[8] : "Sin respuesta" . '</td>';
                        echo '<td>' . $x[5] . '</td>';
                    }
                    ?>
                </tbody>
            </table>

        </div>
        <a href="view_usuario.php"><button  class="btn btn-primary btn-lg btn-block">Atras</button></a>
    </div>
</body>

</html>