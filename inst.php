<?php
session_start(); // start session

// do check
if (!isset($_SESSION["login_user"])) {
    header("location: logout.php");
    exit; // prevent further execution, should there be more code that follows
}
include 'session.php'; include 'datos.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Encuesta</title>
	<!--script type="text/javascript">
	    window.history.forward();
	    function noBack() { window.history.forward(); }
    </script-->
</head>
<body>
    <form action="logout.php" method="post">
        <div align="right">
            <input type="submit" name="submit" value="Cerrar Sesión"/>    
        </div>
    </form>
    <div align="center">
        <img src="banner.jpg">
    </div>
    <table border="0" align="center" width="100%">
        <tr>
            <td><H2 align="center"> INSTITUTO TECNOLÓGICO DE: TEHUACÁN</H2>
		<H2 align="center"> ENCUESTA DE SERVICIO </H2>
	
	
		
	 	Estimado alumno: <br>
		 <br>
		 <div align="justify">

		En nuestro Instituto Tecnológico tenemos la misión y el firme compromiso de satisfacer plenamente tus necesidades y requerimientos en los servicios que ofrecemos, buscando mejorar permanentemente nuestro desempeño y servirte mejor. Para lograr esto, lo mas valioso es su opinión, por lo que se solicita responder con sinceridad un breve  cuestionario anexo, cuya respuesta será la mejor ayuda para superarnos. Se agradece tu atención a la presente y me reitero a tu disposición.  
		</div>
		<br>
         <br>
		<h6 align="center">ATENTAMENTE</h6>   <br>


		<h6 align="center">M.E. YEYETZIN SANDOVAL GONZÁLEZ</h6>  <br>
 
		<h6 align="center">DIRECTORA</h6>  <br>
         <br>
		INSTRUCCIONES:   <br>
         <br>
		El cuestionario que se anexa consta de una serie de afirmaciones sobre el servicio que se ofrece en el Instituto Tecnológico. En cada una califique según la experiencia que tenga, respecto a lo que se afirma. <br>

           <br>
		1. En el cuadro correspondiente de la columna SERVICIO anote la calificación que le  
        asigna usted a su experiencia con el servicio de que se trata, con base en la siguiente escala:  <br>
         <br>
         </table>
        <table border="0" width="100%">
            <tr>
                <td>EXCELENTE [5]</td>
                <td>BUENA [4]</td>
                <td>REGULAR [3]</td>
                <td>MALA [2]</td>
                <td>MUY MALA [1]</td>
            </tr>
        </table>

         <br>
		2. Si desea expresar algún comentario, sugerencia o recomendación utilice el espacio destinado para ello.  <br>
        
         <br>

		<h3 align="center">GRACIAS </h3> <br></td>    
        </tr>
    <hr>
    <br>
    <div align="center" width="100%">
        <form action="" method="post" >
        <h1>Selecciona la encuesta a realizar</h1>
        <select name="areas">
            <option value="">SELECCIONA UN ÁREA</option>
            <option value="CENTRO_DE_INFORMACION_PREGUNTAS">CENTRO DE INFORMACIÓN</option>
            <option value="COORDINACION_DE_CARRERAS_PREGUNTAS">COORDINACIÓN DE CARRERAS</option>
            <option value="RECURSOS_FINANCIEROS_PREGUNTAS">RECURSOS FINANCIEROS</option>
            <option value="RESIDENCIAS_PROFESIONALES_PREGUNTAS">RESIDENCIAS PROFESIONALES</option>
            <option value="DE_COMPUTO_PREGUNTAS">DE CÓMPUTO</option>
            <option value="SERVICIO_SOCIAL_PREGUNTAS">SERVICIO SOCIAL</option>
            <option value="SERVICIOS_ESCOLARES_PREGUNTAS">SERVICIOS ESCOLARES</option>
        </select> 
            <br>
            <br>
            <input type="submit" name="submit2" value="Iniciar encuesta" />
            <br>
            <br>
        </form>
    </div>
    </body>
</html>


