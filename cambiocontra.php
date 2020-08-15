<?php
session_start(); // start session

// do check
if (!isset($_SESSION['user_admin'])) {
    header("location: logout.php");
    exit; // prevent further execution, should there be more code that follows
}
require('conexion.php');
$link=Conectarse();
$pass = $_POST['password'];
$pass2 = $_POST['passwordNew'];
$pass3 = $_POST['passwordNew2'];
$PassCifrada= md5($pass);
//echo "la cifrada es ".$PassCifrada;
$queEmp = "select password from USUARIO_ADMINISTRADOR where password=md5('$pass')"; 
$resEmp = mysqli_query($link,$queEmp) or die(mysqli_error()); 
$totEmp = mysqli_num_rows($resEmp); 

if ($totEmp> 0) { 
    while ($rowEmp = mysqli_fetch_assoc($resEmp)) { 
        $Actual=$rowEmp['password']."<br>"; 
        
        if( $pass2==$pass3){
            //echo "exito";
            $queEmp2 = "UPDATE USUARIO_ADMINISTRADOR SET password = md5('$pass2') WHERE NumCOntrol = '73acd9a5972130b75066c82595a1fae3'";
            //$queEmp = "insert into USUARIO_ADMINISTRADOR (password) VALUES md5('$pass') where NumCOntrol=73acd9a5972130b75066c82595a1fae"; 
            $resEmp2 = mysqli_query($link,$queEmp2) or die(mysqli_error());
            mysqli_close($link);

            ?><script>alert("Cambio de contraseña exitoso");
            location=" Union.php";
            </script><?php
            

        }

        else{
            mysqli_close($link);
           ;
            ?><script>alert("Las contraseñas nuevas no coinciden ");
            location=" contrasena.php";</script><?php 
             
        }

    } 

}
else{
    mysqli_close($link);
   ?>
   <script>alert("La contraseñas actual es erronea");
       location=" contrasena.php";</script>
     
   <?php 
   
}

?>
<html>
    <head>
        
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
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
                <a class="nav-link" href="Union.php" target="_top">Volver a página de respuestas</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php" target="_top">Cerrar sesión</a>
              </li>
            </ul>
          </div>
    </nav>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>