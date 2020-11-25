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
  <h1 class="text-center font-weight-lighter">PANEL USUARIO</h1><br>


  <div class="w-50 mx-auto ">
    <div class="card bg-dark">
      <div class="card-body">
        <h5 class="card-title">Opciones</h5>
        <br>
        <a href="#" class="btn btn-primary btn-block btn-sm p-2" data-toggle="modal" data-target="#crear_requerimiento">Agregar requerimiento</a>
        <a href="#" class="btn btn-primary btn-block btn-sm p-2" data-toggle="modal" data-target="#crear_categoria">Listar requerimientos</a>
      </div>
    </div>
  </div>

  <!-- modal crear requerimiento-->
  <div class="modal fade" id="crear_requerimiento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear requerimeinto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form action="../conexiones/crearRequerimiento.php" method="POST">
          
            <div class="form-group">
              <label>Categorias Principales </label>
              <select class="form-control" name="idcategoria" id="list_cat_principales">
                <option value="0">Seleccione una opcion</option>
                <?php
                $lista = listar_categorias();
                foreach ($lista as $cat) {
                  echo '<option value="'.$cat[0].'">'.$cat[1].'</option>';
                }
                ?>
              </select>
            </div>

            <div class="form-group" id="contenedor_serv_list">
            </div>

            <div class="form-group">
              <label for="Descripcion">Descripcion de la Solicitud</label>
              <textarea class="form-control" name="descripcion" rows="2"></textarea>
            </div>
            <div class="form-group">
              <label for="ubicacionenlaempresa">Ubicacion en la Empresa</label>
              <textarea class="form-control" name="ubicacionenlaempresa" rows="2"></textarea>
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

  <!-- Scrips para tomar id de categoria y pasarlo a la peticion ajax -->
  <script type="text/javascript">
    $(document).ready(() => {
      recargar_sevicio()

      $("#list_cat_principales").change(() => {
        recargar_sevicio()
      }) //salio?? 
    });

    function recargar_sevicio() {
      $.ajax({
        type: 'POST',
        //ahora sale el select pero no cargan los datos
        url: '../conexiones/listarServicioDeCategoria.php',
        data: "idcategoria=" + $("#list_cat_principales").val(),
        success: function(r) {
          $("#contenedor_serv_list").html(r);
        }
      })
    }
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>

</html>