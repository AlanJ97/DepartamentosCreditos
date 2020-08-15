<?php 
session_start(); // start session
require('conexion.php');
$link=Conectarse();
// do check
if (!isset($_SESSION['user_admin'])) {
    header("location: logout.php");
    exit; // prevent further execution, should there be more code that follows
}

?>
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>COMENTARIOS</title>
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
                <a class="nav-link" href="Union.php" target="_top">Volver a página de resultados</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php" target="_top">Cerrar sesión</a>
              </li>
            </ul>
          </div>
    </nav>
     <div class="mb-3">
        <h3 align="center">TABLA DE COMENTARIOS</h3>
     </div>
      <section class="mt-5 mr-5 ml-5">
           <form action="#" method="post">
            <input type="radio" name="gender" value="7"/>Servicio social
            <input type="radio" name="gender" value="8">Servicios escolares
            <input type="radio" name="gender" value="4">Recursos financieros
            <input type="radio" name="gender" value="6">Centro de cómputo
            <input type="radio" name="gender" value="2">Centro de información
            <input type="radio" name="gender" value="3">Coordinación de carrera
            <input type="radio" name="gender" value="5">Residencias profesionales
              <input  type="submit" name="submit" value="MOSTRAR" />
        </form>
       <!-- <div  align="center" class="mt-3 mb-3">
          
        </div>-->
        
      </section>
      
        <?php
        if (isset($_POST['gender'])){
        $Depa= $_POST['gender']; // Displays value of checked checkbox.
        }
        else{
        $Depa='2';
        }
        ?>
        
        <?php 
        $sql="SELECT * FROM COMENTARIOS_AREAS WHERE id_area='$Depa' and comentario != ' '" ;
        $result=mysqli_query($link,$sql) ;
        if (!$result) {
            printf("Error: %s\n", mysqli_error($link));
            exit();
        }
        while($mostrar=mysqli_fetch_array($result)){
        ?>
        
        <div class="mr-5 ml-5">
             <table class="table table-striped " border="1">
          <thead>
            <tr>
                           
              <th scope="col">
              <?php 
                if ($mostrar['id_area']=='2'){
                   echo "Centro de información";
                }
                elseif  ($mostrar['id_area']=='3'){
                     echo "Coordinación de carreras";
                }
                elseif  ($mostrar['id_area']=='4'){
                     echo "Recursos financieros";
                }
                elseif  ($mostrar['id_area']=='5'){
                     echo "Residencias profesionales";
                }
                 elseif  ($mostrar['id_area']=='6'){
                     echo "Centro de cómputo";
                }
                elseif  ($mostrar['id_area']=='7'){
                     echo "Servicio social";
                }
                elseif  ($mostrar['id_area']=='8'){
                     echo "Servicios escolares";
                }
                ?>
                
                </th>
              <th scope="col"><?php echo $mostrar['comentario']?></th>
            </tr>
          </thead>
        <?php 
        }
        ?>
        </table>
        <div align="center" class="mt-5 mb-5">
              <input  type="button" value="Imprimir reporte" onclick="window.print()">
          </div>
        </div>
       
<!--        </table>-->
         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>