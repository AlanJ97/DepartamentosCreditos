<?php
require('conexion.php');
$link=Conectarse();
session_start(); // Starting Session
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
    mysqli_close($link); // Closing Connection
    ?><script>alert("CAMPOS VACÍOS")</script><?php 
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);

$query = mysqli_query($link,"select * from USUARIOS where Contrasena = md5('$password') AND NumCOntrol ='$username'") or -1;
$query_a = mysqli_query($link,"select * from USUARIO_ADMINISTRADOR where password = md5('$password') AND NumCOntrol = md5('$username')") or -1;

$rows = mysqli_fetch_array($query);
$rows_a = mysqli_fetch_array($query_a);
if (count($rows)>count($rows_a)) {
   if (count($rows)>0) {
    mysqli_close($link); // Closing Connection
    $_SESSION['login_user']=$username; // Initializing Session
    $usuario=array($rows["ApePaterno"],$rows["ApeMaterno"],$rows["Nombre"]);
    $_SESSION['datos']=$usuario;
    header("location: inst.php"); // Redirecting To Other Page
    } else {
        ?><script>alert("ERROR, USUARIO O CONTRASEÑA INCORRECTOS")</script><?php 
    }
}else{
    if (count($rows_a)>0) {
    mysqli_close($link); // Closing Connection
    $_SESSION['user_admin']=$username; // Initializing Session
    header("location: Union.php"); // Redirecting To Other Page
    } else {
        ?><script>alert("ERROR, USUARIO O CONTRASEÑA INCORRECTOS")</script><?php 
    }
}
mysqli_close($link); // Closing Connection
}
}
?>