<?php
session_start(); // start session

// do check
if (!isset($_SESSION["login_user"])) {
    header("location: logout.php");
    exit; // prevent further execution, should there be more code that follows
}
if (!isset($_COOKIE['op'])||!isset($_COOKIE['comn'])||!isset($_COOKIE['datos'])||!isset($_COOKIE['idp'])||!isset($_COOKIE['preguntas'])) {
    ?><script >
        alert("ERROR GUARDANDO DATOS, RESPONDE UNA ENCUESTA A LA VEZ");
        location="logout.php";
        </script>
    <?php
    exit;
} else {
    require('conexion.php');
    $link=Conectarse();
    if(!isset($_SESSION)) 
        { 
            session_start(); 
        }
    $u=$_SESSION['login_user'];
    $a = unserialize($_COOKIE['op']);
    $b = unserialize($_COOKIE['comn']);
    $c = unserialize($_COOKIE['datos']);
    $d = unserialize($_COOKIE['idp']);
    for($i = 0; $i < count($a); $i++) {
        mysqli_query($link,"INSERT INTO DATOS (id_pregunta, id_area, usuario, calificacion) VALUES ('".$d[$i]."','".$c[0]."', '$u', '".$a[$i]."')");
    }
    mysqli_query($link,"INSERT INTO COMENTARIOS_AREAS (id_area, usuario, comentario) VALUES ('".$c[0]."', '$u', '".$b[0]."')");
    
    mysqli_query ($link, "INSERT INTO ENCUESTA_TERMINADA (usuario, nombre_area ) VALUE ('$u', '".$c[2]."')");
    
    mysqli_close($link);
    setcookie("op", " ", time() - 10);
    setcookie("comn", " ", time() - 10);
    setcookie("datos", " ", time() - 10);
    setcookie("idp", " ", time() - 10);
    setcookie("preguntas", " ", time() - 10);
    header("Location: inst.php");
}

?>