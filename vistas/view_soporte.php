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

                    <form action="../conexiones/crearRequerimiento.php" method="POST">

                        <div class="form-group" hidden>
                            <label for="exampleFormControlInput1">Crear servicio</label>
                            <input type="text" class="form-control" name="id" placeholder="id">
                        </div>

                        <div class="form-group">
                            <label for="Descripcion">Detalle</label>
                            <textarea class="form-control" name="detalle" rows="2"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6  mt-3">
                                <!-- boton del Modal enviar -->
                                <button type="submit" class="btn btn-primary w-100">
                                    Enviar <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                                        <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                                        <path fill-rule="evenodd" d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                </button>
                            </div>

                            <div class="col-md-6  mt-3">
                                <!-- boton del modal eliminar -->
                                <a href="crearREQ.html"><button type="button" class="btn btn-secondary w-100">
                                        Limpiar <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </button></a>
                            </div>
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
                $("#"+id).val(idR);
            });


        });
    </script>



    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>

</html>