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
    <div class="container-flex">
        <br>
        <h1 class="text-center font-weight-lighter">PANEL SOPORTE</h1><br>


        <div class="row">
            <div class="col-sm-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Reportes aceptados</h5>
                        <p class="card-text">
                            <div>
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">FECHA</th>
                                            <th scope="col">DESCRIPCION</th>
                                            <th scope="col">UBICACION</th>
                                            <th scope="col">OPCIONES</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $lista = listar_requerimientos_aceptados();
                                        foreach ($lista as $x) {
                                            echo '<tr><th scope="row">' . $x[0] . '</th>';
                                            echo '<td>' . $x[9] . '</td>';
                                            echo '<td>' . $x[6] . '</td>';
                                            echo '<td>' . $x[5] . '</td>';
                                            echo '<td> <button id="responder' . $x[0] . '" class="btn btn-primary p-1" data-toggle="modal" data-target="#responder_requerimiento">Responder</button><form action="../conexiones/cancelarReq.php" method="POST"><button type="submit" class="btn btn-danger p-1" name="req" value="' . $x[0] . '">Cancelar</button></form></td>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Reportes disponibles</h5>
                        <p class="card-text">
                            <div>
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">FECHA</th>
                                            <th scope="col">DESCRIPCION</th>
                                            <th scope="col">UBICACION</th>
                                            <th scope="col">OPCIONES</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $lista = listar_requerimientos_soporte();
                                        foreach ($lista as $x) {
                                            echo '<tr><th scope="row">' . $x[0] . '</th>';
                                            echo '<td>' . $x[9] . '</td>';
                                            echo '<td>' . $x[6] . '</td>';
                                            echo '<td>' . $x[5] . '</td>';
                                            echo '<td><form action="../conexiones/aceptarReq.php" method="POST"><button type="submit" class="btn btn-primary p-1" name="req" value="' . $x[0] . '">Aceptar</button></form></td>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <br><br><br>
        <hr>
        <a href="../conexiones/cerrarSession.php"><button class="btn btn-primary btn-lg btn-block">Cerrar sesión</button></a>
    </div>


    <!-- modal crear requerimiento-->
    <div class="modal fade" id="responder_requerimiento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Responder requerimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="../conexiones/responderReq.php" method="POST">

                        <div class="form-group" hidden>
                            <label for="exampleFormControlInput1">Crear servicio</label>
                            <input type="text" class="form-control" id="id" name="id" placeholder="id">
                        </div>

                        <div class="form-group">
                            <label for="Descripcion">Detalle</label>
                            <textarea class="form-control" name="detalle" rows="2"></textarea>
                        </div>

                        <div class="col-md-6 col-12 mt-3">
                            <!--boton de registrar -->
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Responder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






    <script>
        $(document).ready(function() {

            $("button[id^=responder]").click(function() {
                let id = $(this).attr("id");
                idR = id.replace("responder", "");
                $("#id").val(idR);
            });
        });
    </script>



    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>

</html>