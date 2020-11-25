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

        <h1 class="text-center font-weight-lighter">Lista servicios</h1><br>
        <hr>

        <div>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Servicios</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $lista = listar_servicios();
                    foreach ($lista as $x) {
                        echo '<tr><th scope="row">' . $x[0] . '</th>';
                        echo '<td>' . $x[2] . '</td>';
                        echo '<td> <button class="btn btn-primary p-1">Editar</button></td>';
                        echo '<td><form action="../conexiones/eliminarServicio.php" method="POST"><button type="submit" class="btn btn-danger p-1" name="servicio" value="' . $x[0] . '">Eliminar</button></form></td></tr>';
                    }
                    ?>
                </tbody>
            </table>

        </div>
        <a href="view_admin.php"><button  class="btn btn-primary btn-lg btn-block">Atras</button></a>
    </div>
</body>

</html>