<?php
require_once "../conexiones/funciones.php"

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <title>ADMIN</title>
</head>

<body class="bg-dark text-white">

  <!-- vista pagina -->
  
  <div class="container">

    <h1 class="text-center font-weight-lighter">PANEL ADMINISTRADOR</h1>
    <br><br><br>
    <div class="row">
      <div class="col-sm-4">
        <div class="card bg-dark">
          <div class="card-body">
            <h5 class="card-title">Usuarios</h5>

            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#crear_usuario">Agregar</a>
            <a href="./admin_listar_usuario.php" class="btn btn-primary">listar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card bg-dark">
          <div class="card-body">
            <h5 class="card-title">Categorias</h5>

            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#crear_categoria">Agregar</a>
            <a href="./admin_listar_categorias.php" class="btn btn-primary">listar</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card bg-dark">
          <div class="card-body">
            <h5 class="card-title">Servicios</h5>

            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#crear_servicio">Agregar</a>
            <a href="./admin_listar_servicio.php" class="btn btn-primary">listar</a>

          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Modal crear usuario-->
  <div class="modal fade" id="crear_usuario" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Crear usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="container">
            <form action="../conexiones/recibe_registro.php" method="POST">
              <br>
              <div class="row">
                <div class="col-md-6  mt-3">
                  <input type="text" name="nombre_re" required class="form-control" placeholder="Nombre">
                </div>
                <div class="col-md-6 mt-3">
                  <input type="text" name="apellido_re" required class="form-control" placeholder="Apellido">
                </div>
                <div class="input-group mt-3 col-md-6">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo de usuario</label>
                  </div>
                  <select class="custom-select" name="ID_tipo_usuario" id="inputGroupSelect01">
                    <option selected>Seleccione...</option>
                    <option value="1">Administrador</option>
                    <option value="2">Soporte</option>
                    <option value="3">usuario</option>
                  </select>
                </div>

                <div class="col-md-6  mt-3">
                  <input type="text" name="codigo" required class="form-control" placeholder="cedula">
                </div>

              </div>

              <div class="border-primary rounded">
                <label for="emailregistro"></label>
                <input type="email" class="form-control" required name="email_re" placeholder="email">
              </div>
              <div class="border-primary rounded">
                <label for="claveregistro"></label>
                <input type="password" class="form-control" required name="contrasena_re" placeholder="contraseña">
              </div><br>
              <div class="border-primary rounded">
                <input type="text" name="direccion_re" required class="form-control" placeholder="Direccion">
              </div><br>
              <div class="border-primary rounded">
                <input type="text" name="telefono_re" required class="form-control" placeholder="Telefono de contacto">
              </div><br>
              <div class="border-primary rounded">
                <input type="text" name="usuario_re" required class="form-control" placeholder="Usuario">
              </div><br>
              <div class="row">
                <div class="col-md-6 col-12 mt-3">
                  <!--boton de registrar -->
                  <button type="submit" class="btn btn-primary p-1">Registrar</button>
                  <button type="button" class="btn btn-secondary p-1" data-dismiss="modal">Cerrar</button>

                </div>

              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- Modal crear categoria-->
  <div class="modal fade" id="crear_categoria" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Crear categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="../conexiones/crearCategoria.php">
            <div class="form-group">
              <label for="exampleFormControlInput1">Categoria</label>
              <input type="text" class="form-control" name="categoria" placeholder="categoria">
            </div>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>

          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal crear servicio-->
  <div class="modal fade" id="crear_servicio" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-dark">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Crear servicio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="../conexiones/crearServicio.php">

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
          
            <div class="form-group">
              <label for="exampleFormControlInput1">Crear servicio</label>
              <input type="text" class="form-control" name="servicio" placeholder="Servicio">
            </div>

            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>

          </form>
        </div>
        
      </div>
    </div>
  </div>


</body>

</html>