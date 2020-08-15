<?php
session_start(); // start session
// do check
if (!isset($_SESSION["login_user"])) {
    header("location: logout.php");
    exit; // prevent further execution, should there be more code that follows
}
include 'session.php';include 'pd.php';

if (!isset($_COOKIE['datos'])||!isset($_COOKIE['preguntas'])){
    ?><script >
        alert("SELECCIONA UN SERVICIO");
        location="inst.php";
        </script>
    <?php
    exit;
}else{
	$row_p = unserialize($_COOKIE['datos']);
	$pregunta = unserialize($_COOKIE['preguntas']);
    ?>
    <html>
        <head>
    	   <meta charset="UTF-8">
    	   <title>PREGUNTAS</title>
    	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	   <script type="text/javascript" src="scripts/validar.js"></script>  
        </head>
        <body>
            <form action="logout.php" method="post">
            <div align="right">
                <input type="submit" name="submit" value="Cerrar Sesión"/>    
            </div>
            </form>
            <table border="2px" align="center" width="100%">
                <tr>
                    <td align="center" rowspan="3"><img src="SGC-TECNM.jpg"></td>
                    <td>Formato para encuestas de servicio </td>
                    <td>
                        <table border="0" width="100%">
                            <td>
                            <tr>Código: TecNM-CA-PO-001-02</tr>
                            </td>
                            <hr>
                            <td> 
                            <tr>Revisión: O</tr>
                            </td>
                         </table>	
                    </td>
                </tr>
                <tr>
                    <td>Referencia a la norma ISO 9001:2015 5.1.2,9.2 </td>
                    <td>Página <?php echo $row_p[0]; ?> de 8 </td>
                </tr>
            </table>
            <h4 align="center">ENCUESTA DE SERVICIO </h4>
            <table border="0" width="100%">
                <tr>
                    <td>
                        <h4>USUARIO &nbsp; &nbsp; &nbsp; &nbsp; <?php $session=$_SESSION['datos']; foreach($session as $val){echo $val.'   ';} ?></h4>
                    </td>
                    <td align="right">
                        <h4><?php echo date("d/m/Y");?></h4>
                    </td>
                </tr>
            </table>
            <h4>SERVICIO &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $row_p[1]; ?></h4>
            <br>
            <table align="right" widht="100%">
                <tr>
                    <td><h4> SERVICIO&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h4></td>
                </tr>
            </table>
            <form action="" method="post">
                <table border="3" width="100%" size:"14px";>
                      <tr align="center">
                        <td></td>
                        <td>Excelente [5]</td>
                        <td>Buena [4]</td>
                        <td>Regular [3]</td>
                        <td>Mala [2]</td>
                        <td>Muy mala [1]</td>     
                    <tr align="center">
                        <td align="left"><?php echo $pregunta[0]; ?></td>
                        <td><input type="checkbox" class="a" name="o[]" value="5" ></td>
                        <td><input type="checkbox" class="a" name="o[]" value="4" ></td>
                        <td><input type="checkbox" class="a" name="o[]" value="3" ></td>
                        <td><input type="checkbox" class="a" name="o[]" value="2" ></td>
                        <td><input type="checkbox" class="a" name="o[]" value="1" ></td>
                    </tr>
                    <tr align="center">
                        <td align="left"><?php echo $pregunta[1]; ?></td>
                        <td><input type="checkbox" class="b" name="o[]" value="5" ></td>
                        <td><input type="checkbox" class="b" name="o[]" value="4" ></td>
                        <td><input type="checkbox" class="b" name="o[]" value="3" ></td>
                        <td><input type="checkbox" class="b" name="o[]" value="2" ></td>
                        <td><input type="checkbox" class="b" name="o[]" value="1" ></td>
                    </tr>
                    <tr align="center">
                        <td align="left"><?php echo $pregunta[2]; ?></td>
                        <td><input type="checkbox" class="c" name="o[]" value="5" ></td>
                        <td><input type="checkbox" class="c" name="o[]" value="4" ></td>
                        <td><input type="checkbox" class="c" name="o[]" value="3" ></td>
                        <td><input type="checkbox" class="c" name="o[]" value="2" ></td>
                        <td><input type="checkbox" class="c" name="o[]" value="1" ></td>
                    </tr>
                    <tr align="center">
                        <td align="left"><?php echo $pregunta[3]; ?></td>
                        <td><input type="checkbox" class="d" name="o[]" value="5" ></td>
                        <td><input type="checkbox" class="d" name="o[]" value="4" ></td>
                        <td><input type="checkbox" class="d" name="o[]" value="3" ></td>
                        <td><input type="checkbox" class="d" name="o[]" value="2" ></td>
                        <td><input type="checkbox" class="d" name="o[]" value="1" ></td>
                    </tr>
                    <tr align="center">
                        <td align="left"><?php echo $pregunta[4]; ?></td>
                        <td><input type="checkbox" class="e" name="o[]" value="5" ></td>
                        <td><input type="checkbox" class="e" name="o[]" value="4" ></td>
                        <td><input type="checkbox" class="e" name="o[]" value="3" ></td>
                        <td><input type="checkbox" class="e" name="o[]" value="2" ></td>
                        <td><input type="checkbox" class="e" name="o[]" value="1" ></td>
                    </tr>
                    <tr align="center">
                        <td align="left"><?php echo $pregunta[5]; ?></td>
                        <td><input type="checkbox" class="f" name="o[]" value="5" ></td>
                        <td><input type="checkbox" class="f" name="o[]" value="4" ></td>
                        <td><input type="checkbox" class="f" name="o[]" value="3" ></td>
                        <td><input type="checkbox" class="f" name="o[]" value="2" ></td>
                        <td><input type="checkbox" class="f" name="o[]" value="1" ></td>
                    </tr>
                    <tr align="center">
                        <td align="left"><?php echo $pregunta[6]; ?></td>
                        <td><input type="checkbox" class="g" name="o[]" value="5" ></td>
                        <td><input type="checkbox" class="g" name="o[]" value="4" ></td>
                        <td><input type="checkbox" class="g" name="o[]" value="3" ></td>
                        <td><input type="checkbox" class="g" name="o[]" value="2" ></td>
                        <td><input type="checkbox" class="g" name="o[]" value="1" ></td>
                    </tr>
                    <tr align="center">
                        <td align="left"><?php echo $pregunta[7]; ?></td>
                        <td><input type="checkbox" class="h" name="o[]" value="5" ></td>
                        <td><input type="checkbox" class="h" name="o[]" value="4" ></td>
                        <td><input type="checkbox" class="h" name="o[]" value="3" ></td>
                        <td><input type="checkbox" class="h" name="o[]" value="2" ></td>
                        <td><input type="checkbox" class="h" name="o[]" value="1" ></td>
                    </tr>
                    <tr align="center">
                        <td align="left"><?php echo $pregunta[8]; ?></td>
                        <td><input type="checkbox" class="i" name="o[]" value="5" ></td>
                        <td><input type="checkbox" class="i" name="o[]" value="4" ></td>
                        <td><input type="checkbox" class="i" name="o[]" value="3" ></td>
                        <td><input type="checkbox" class="i" name="o[]" value="2" ></td>
                        <td><input type="checkbox" class="i" name="o[]" value="1" ></td>
                    </tr>
                </table> 
                <br>
                <h3>¿Tiene algún comentario? Colóquelo aquí</h3>
                <textarea style="overflow:auto;resize:none" rows="3" cols="160" name="oo[]"></textarea>
                <br>
                <br>
                <div align="center">
                    <input class="button" name="submit" type="submit" value="TERMINAR"/>
                </div>
            </form>
        </body> 
        <table border="0" align="center" width="100%">
            <tr>
                <td>TecNM-CA-PO-001-02&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rev. O</td>
            </tr>
        </table>
    </html><?php
}
?>
