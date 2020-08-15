<?php
session_start();
if (isset($_COOKIE['op'])||isset($_COOKIE['comn'])||isset($_COOKIE['datos'])||isset($_COOKIE['idp'])||isset($_COOKIE['preguntas'])) {
    setcookie("op", " ", time() - 10);
    setcookie("comn", " ", time() - 10);
    setcookie("datos", " ", time() - 10);
    setcookie("idp", " ", time() - 10);
    setcookie("preguntas", " ", time() - 10);
}
if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}
?>