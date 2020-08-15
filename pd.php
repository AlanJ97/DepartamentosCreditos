<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

// do check
if (!isset($_SESSION["login_user"])) {
    header("location: logout.php");
    exit; // prevent further execution, should there be more code that follows
}
if ( isset( $_POST['submit'] ) ) { 
//$usuario = $_SESSION['login_user'];
$opciones = $_POST['o'] = isset($_POST['o']) ? $_POST['o'] : '';
$comentario = $_POST['oo'] = isset($_POST['oo']) ? $_POST['oo'] : "SIN COMENTARIO";
if (count($opciones)!= 9) {
    ?><script>alert("Responde todas las preguntas")</script><?php 
}else{
    if (count($comentario)!=1 && $comentario!=''){
	    setcookie('op',serialize($opciones),time()+60);
	    setcookie('comn',serialize($comentario),time()+60);
	    header('Location: gd.php');
    }else{
	    setcookie('op',serialize($opciones),time()+60);
	    setcookie('comn',serialize($comentario),time()+60);
	    header('Location: gd.php');
	}
}
}
?>