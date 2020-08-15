<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if(isset($_SESSION['recargar'])){
    header('Location: borrado.php');
}else{
    $_SESSION['recargar']=1;
}
    
if (isset($_POST['submit2'])) {
    if(isset($_POST['areas'])){
        $ver = "SELECT * FROM ENCUESTA_TERMINADA WHERE usuario = '".$_SESSION['login_user']."' AND nombre_area = '".$_POST['areas']."'";
        $query = mysqli_query($link,$ver);
        $rows = mysqli_fetch_array($query);
        if (count($rows)>0) {
            ?><script>alert("ENCUESTA REALIZADA")</script><?php
            
        } else{
            if($_POST['areas']==""){
                ?><script>alert("SELECCIONA UN SERVICIO VÁLIDO")</script><?php
            }else{
                if (isset($_COOKIE['op'])||isset($_COOKIE['comn'])||isset($_COOKIE['datos'])||isset($_COOKIE['idp'])||isset($_COOKIE['preguntas'])) {
                    ?><script >
                        alert("CERRANDO SESIÓN \n SÓLO PUEDES RESPONDER UNA ENCUESTA A LA VEZ ");
                        location="logout.php";
                        </script>
                    <?php
                    exit;
                } else {
                    $sql = "SELECT pregunta FROM ".$_POST['areas'];
                    $sql2 = "SELECT id_pregunta FROM ".$_POST['areas'];
                    $sql_p ="SELECT id_area, nombre_area FROM ".$_POST['areas']. " WHERE id_pregunta = 1";
                    $result=mysqli_query($link,$sql);
                    $result2=mysqli_query($link,$sql2);
                    $result_p=mysqli_query($link,$sql_p);
                    $row_p=mysqli_fetch_array($result_p);
                    $pregunta = [];
                    $idp = [];
                    $datos = [$row_p[0], $row_p[1], $_POST['areas']];
                    foreach ($result as $row){
                        $pregunta[] = $row['pregunta'];
                    }
                    foreach ($result2 as $row){
                        $idp[] = $row['id_pregunta'];
                    }
            	    setcookie('datos',serialize($datos));
            	    setcookie('preguntas',serialize($pregunta));
            	    setcookie('idp',serialize($idp));
            	    mysqli_free_result($result);mysqli_free_result($result_p); mysqli_free_result($result2); mysqli_close($link);
                    header('Location: encuesta.php');
                }
            }
            
        }
        
    }else{
        ?><script>alert("SELECCIONA EL SERVICIO CORRESPONDIENTE")</script><?php 
    }
}
?>