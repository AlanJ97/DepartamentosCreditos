<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: inst.php");
}
if(isset($_SESSION['user_admin'])){
header("location: Union.php");
}
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    	<link rel="stylesheet" href="background.css"/>
    	<script type="text/javascript">
	        window.history.forward();
	        function noBack() { window.history.forward(); }
        </script>
</head>
<body bgcolor="014e82" width="100%">
<form action="" method="post" class="form-container">
<div align="center" class="form-title"><h1>ENCUESTA DE SERVICIOS</h1></div>
<div class="form-title">Número de control</div>
<input class="form-field" id="name" type="text" name="username" placeholder="12345678" /><br />
<div class="form-title">Contraseña</div>
<input class="form-field" id="password" name="password" placeholder="****" type="password" /><br />
<div class="submit-container">
<input class="submit-button" input name="submit" type="submit" value="Iniciar sesión"/>
</div>
</form>
</body>
</html>