<?php
require_once "./conexiones/funciones.php";
existe_usuario();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Proyecto Final</title>
    <h1 class="text-center mt-3">Proyecto Final</h1>
  </head>

  <body class="bg-dark text-white ">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <br><br>

  
    <form action="conexiones/recibe_login.php" method="POST">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-auto">
            <div class="row no-gutters bg-ligth ">
              <div class="col">
                <img src="imagenes/INICIO.png" class="w-100 h-60" alt="...">
              </div>
              <div class="col">
                <div class="col-md-6 position-static p-4 pl-md-0">
                  <h5 class="mt-0">Inicio de sesion</h5>
                  <div class="form-group">
                    <label for="inputusuario"><b>Usuario</b> </label><br>
                    <input type="text" name="usuario" class="border-primary rounded">
                    <small class="form-text">No compartiremos sus datos.</small>
                  </div>
                  <div class="form-group">
                    <label for="inputcontraseña"><b>Contraseña</b> </label><br>
                    <input type="password"  name="contrasena" class="border-primary rounded">
                  </div>
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="recordar">
                    <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                  </div>
                  <button type="submit" class="btn btn-primary ">Ingresar <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-in-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                  </svg></button>
                </div>
             
              </div>
            </div>
          </div>
        </div>
      </div>

    </form>

  </body>
</html>