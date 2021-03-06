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

        <div class="row">
            <div class="col-sm-4">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios</h5>

                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#crear_usuario">Agregar</a>
                        <a href="#" class="btn btn-primary">listar</a>
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
                        <a href="#" class="btn btn-primary">listar</a>

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
                      <option value="administrador">Administrador</option>
                      <option value="tecnico">Tecnico</option>
                      <option value="usuario">usuario</option>
                    </select>
                  </div>
                  
                  <div class="col-md-6  mt-3">
                    <input type="text" name="codigo" required class="form-control" placeholder="cedula" >
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
                        <button type="submit" class="btn btn-primary w-100" >Registrar  <svg width="1em" height="1em" viewBox="0 0 16 16"
                          class="bi bi-file-earmark-plus" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path
                            d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
                          <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z" />
                          <path fill-rule="evenodd"
                            d="M8 6.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 .5-.5z" />
                        </svg> </button>
                      </div>
                      <div class="col-md-6 mt-3">
                        <!--boton de  limpiar -->
                        <a href="registro.html">
                          <button type="button" class="btn btn-secondary w-100">Limpiar <svg width="1em" height="1em" viewBox="0 0 16 16"
                            class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                            <path fill-rule="evenodd"
                              d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                          </svg> </button>
                        </div></a>
                      
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
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>









    <!-- <div class="row no-gutters bg-ligth position-static ">
            <div class="col">
                <div class="col-md-auto">

                    <br><br><br>

                    <a href="consultarREQ.html"><button type="button" class="btn btn-primary btn-lg btn-block">Consultar Requerimientos
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg></button></a>
                    <br>
                    <a href="registro.html"><button type="button" class="btn btn-secondary btn-lg btn-block">Crear Usuario
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
                                <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg></button></a></button>

                </div>
            </div>
        </div> -->




</body>

</html>