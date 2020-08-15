<?php

    require('conexion.php');
    $link=Conectarse();
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    // Storing Session
    $user_check=$_SESSION['login_user'];
    // SQL Query To Fetch Complete Information Of User
    $ses_sql=mysqli_query($link,"select NumCOntrol from USUARIOS where NumCOntrol='$user_check'");
    $row = mysqli_fetch_assoc($ses_sql);
    $login_session =$row['NumCOntrol'];
    if(!isset($login_session)){
    mysqli_close($link); // Closing Connection
    header('Location: index.php'); // Redirecting To Home Page
    }

?>