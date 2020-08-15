<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if (isset($_COOKIE['op'])||isset($_COOKIE['comn'])||isset($_COOKIE['datos'])||isset($_COOKIE['idp'])||isset($_COOKIE['preguntas'])) {
    setcookie("op", " ", time() - 10);
    setcookie("comn", " ", time() - 10);
    setcookie("datos", " ", time() - 10);
    setcookie("idp", " ", time() - 10);
    setcookie("preguntas", " ", time() - 10);
}
unset( $_SESSION["recargar"] );
header('Location: inst.php');
?>
