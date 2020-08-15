<?php
session_start(); // start session

// do check
if (!isset($_SESSION['user_admin'])) {
    header("location: logout.php");
    exit; // prevent further execution, should there be more code that follows
}
?>
<html>
    <head>
        <title>
            ADMINISTRADOR
        </title>
        <script type="text/javascript" >
        
       
        </script> 
         
    </head>
    <FRAMESET ROWS="25%,*" frameborder="no" border="0" framespacing="0">
        <FRAME src="MenuPassword.php" scrolling="No" noresize="noresize" ></FRAME>
        <FRAME src="TablaDatos.php" ></FRAME>
    </FRAMESET>
    <NOFRAMES>
        <BODY >           
           
        </BODY>
    </NOFRAMES>
</html>