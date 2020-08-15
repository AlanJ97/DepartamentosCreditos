<?php
session_start(); // start session

// do check
if (!isset($_SESSION['user_admin'])) {
    header("location: logout.php");
    exit; // prevent further execution, should there be more code that follows
}
?>
 <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
    <title>Cambiar contraseña</title>
  </head>
  <body>
   <nav class="navbar navbar-dark bg-dark">
         <a class="navbar-brand" href="#">Menú de opciones</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="Union.php" target="_top">Volver a página de resultados</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php" target="_top">Cerrar sesión</a>
              </li>
            </ul>
          </div>
    </nav>

  <form action="cambiocontra.php" method="post" class="mr-5 ml-5">
  <div class="form-group">
    <label for="formGroupExampleInput">Contraseña actual</label>
    <input type="password" class="form-control" id="formGroupExampleInput" name="password" placeholder="Escriba contraseña">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Nueva contraseña</label>
    <input type="password" class="form-control" id="formGroupExampleInput2" name="passwordNew" placeholder="Escriba contraseña">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Confirme contraseña</label>
    <input type="password" class="form-control" id="formGroupExampleInput2" name="passwordNew2" placeholder="Escriba contraseña">
  </div>
  <input type="submit" value="Cambiar">
</form>
   <script>
 
 </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
 

 