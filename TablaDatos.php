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
		<title>Centro de información</title>
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
                <td>Página 2 de 8 </td>
            </tr>
        </table>
		  <script language="JavaScript" type="text/JavaScript">
            function MM_jumpMenu(targ,selObj,restore){
              eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
              if (restore) selObj.selectedIndex=0;
            }
          
            
            
           var f = new Date();
            </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>

        <?php 
        require('conexion.php');
        $link=Conectarse();
        
        
        $contarArea =mysqli_query($link,"select count(*) from DATOS where id_area='2'  order by calificacion");
        while($row = mysqli_fetch_array($contarArea)) { 
    	$Area=$row["count(*)"];
    	 }
        ?>  

		<table border="0px" align="center" width="100%">
            <tr>
                <td>NOMBRE DEL IT: </td>
                <td>INSTITUTO TECNOLÓGICO DE TEHUACÁN </td>
            </tr>
            <tr>
                <td>ÁREA AUDITADA:  </td>
                <td> 
            <div class="dropdown">
                  <a  class="btn btn-light" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Centro de información
                  </a>

                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="TablaDatos.php">Centro de información</a>
                    <a class="dropdown-item" href="tablaDatos2.php">Recursos financieros</a>
                    <a class="dropdown-item" href="tablaDatos5.php">Servicio social</a>
                    <a class="dropdown-item" href="tablaDatos6.php">Servicios escolares</a>
                    <a class="dropdown-item" href="tablaDatos3.php">Residencias profesionales</a>
                    <a class="dropdown-item" href="tablaDatos4.php">Centro de cómputo</a>
                    <a class="dropdown-item" href="tablaDatos1.php">Coordinación de carrera</a>
                  </div>
                </div>
            </td>
            </tr>
             <tr>
                <td>RESPONSABLE:  </td>
                <td> MI LUIS CARLOS ORTUÑO BARBA </td>
            </tr>
             <tr>
                <td>FECHA: </td>
                <td><script>document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear()); </script> </td>
            </tr>
            <tr>
                <td>No. DE ENCUESTADOS:</td>
                <td><?php echo "  ".$Area ?></td>
            </tr>
        </table>
         
            <style type="text/css">
            .tg  {border-collapse:collapse;border-spacing:0;}
            .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
            .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
            .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
            .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
            .tg .tg-0lax{text-align:left;vertical-align:top}
            </style>

        <table width="100%" class="tg" border="2">
            
          <tr>
            <th class="tg-c3ow" rowspan="3">No.</th>
            <th class="tg-c3ow" colspan="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALIFICACIÓN.                       </th>
            <th class="tg-0pky"></th>
          </tr>
          <tr>
            <td class="tg-c3ow" colspan="5"><?php echo $Area ?></td>
            <td class="tg-0pky" rowspan="2">Promedio</td>
          </tr>
           <tr>
            <td class="tg-c3ow">1</td>
            <td class="tg-0lax">2</td>
            <td class="tg-0lax">3</td>
            <td class="tg-0lax">4</td>
            <td class="tg-0lax">5</td>
         </tr>
           <?php
                
                $contar1_5 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='1' and calificacion='5' order by calificacion");
                while($row = mysqli_fetch_array($contar1_5)) { 
            	$v1_5=$row["count(*)"];
            	 }
            	$contar1_4 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='1' and calificacion='4' order by calificacion");
                while($row = mysqli_fetch_array($contar1_4)) { 
            	$v1_4=$row["count(*)"];
            	 }
            	 $contar1_3 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='1' and calificacion='3' order by calificacion");
                while($row = mysqli_fetch_array($contar1_3)) { 
            	$v1_3=$row["count(*)"];
            	 }
            	 $contar1_2 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='1' and calificacion='2' order by calificacion");
                while($row = mysqli_fetch_array($contar1_2)) { 
            	$v1_2=$row["count(*)"];
            	 }
            	 $contar1_1 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='1' and calificacion='1' order by calificacion");
                while($row = mysqli_fetch_array($contar1_1)) { 
            	$v1_1=$row["count(*)"];
            	 }//////////////////////////////////////////////////////////////////////////////
            	                
                $contar2_5 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='2' and calificacion='5' order by calificacion");
                while($row = mysqli_fetch_array($contar2_5)) { 
            	$v2_5=$row["count(*)"];
            	 }
            	$contar2_4 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='2' and calificacion='4' order by calificacion");
                while($row = mysqli_fetch_array($contar2_4)) { 
            	$v2_4=$row["count(*)"];
            	 }
            	 $contar2_3 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='2' and calificacion='3' order by calificacion");
                while($row = mysqli_fetch_array($contar2_3)) { 
            	$v2_3=$row["count(*)"];
            	 }
            	 $contar2_2 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='2' and calificacion='2' order by calificacion");
                while($row = mysqli_fetch_array($contar2_2)) { 
            	$v2_2=$row["count(*)"];
            	 }
            	 $contar2_1 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='2' and calificacion='1' order by calificacion");
                while($row = mysqli_fetch_array($contar2_1)) { 
            	$v2_1=$row["count(*)"];
            	 }////////////////////////////////////////////////////////////
                $contar3_5 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='3' and calificacion='5' order by calificacion");
                while($row = mysqli_fetch_array($contar3_5)) { 
            	$v3_5=$row["count(*)"];
            	 }
            	$contar3_4 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='3' and calificacion='4' order by calificacion");
                while($row = mysqli_fetch_array($contar3_4)) { 
            	$v3_4=$row["count(*)"];
            	 }
            	 $contar3_3 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='3' and calificacion='3' order by calificacion");
                while($row = mysqli_fetch_array($contar3_3)) { 
            	$v3_3=$row["count(*)"];
            	 }
            	 $contar3_2 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='3' and calificacion='2' order by calificacion");
                while($row = mysqli_fetch_array($contar3_2)) { 
            	$v3_2=$row["count(*)"];
            	 }
            	 $contar3_1 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='3' and calificacion='1' order by calificacion");
                while($row = mysqli_fetch_array($contar3_1)) { 
            	$v3_1=$row["count(*)"];
            	 }////////////////////////////////////////////////////////////////////////////////
            	$contar4_5 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='4' and calificacion='5' order by calificacion");
                while($row = mysqli_fetch_array($contar4_5)) { 
            	$v4_5=$row["count(*)"];
            	 }
            	$contar4_4 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='4' and calificacion='4' order by calificacion");
                while($row = mysqli_fetch_array($contar4_4)) { 
            	$v4_4=$row["count(*)"];
            	 }
            	 $contar4_3 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='4' and calificacion='3' order by calificacion");
                while($row = mysqli_fetch_array($contar4_3)) { 
            	$v4_3=$row["count(*)"];
            	 }
            	 $contar4_2 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='4' and calificacion='2' order by calificacion");
                while($row = mysqli_fetch_array($contar4_2)) { 
            	$v4_2=$row["count(*)"];
            	 }
            	 $contar4_1 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='4' and calificacion='1' order by calificacion");
                while($row = mysqli_fetch_array($contar4_1)) { 
            	$v4_1=$row["count(*)"];
            	 }////////////////////////////////////////////////////////////////////////////////
            	 $contar5_5 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='5' and calificacion='5' order by calificacion");
                while($row = mysqli_fetch_array($contar5_5)) { 
            	$v5_5=$row["count(*)"];
            	 }
            	$contar5_4 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='5' and calificacion='4' order by calificacion");
                while($row = mysqli_fetch_array($contar5_4)) { 
            	$v5_4=$row["count(*)"];
            	 }
            	 $contar5_3 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='5' and calificacion='3' order by calificacion");
                while($row = mysqli_fetch_array($contar5_3)) { 
            	$v5_3=$row["count(*)"];
            	 }
            	 $contar5_2 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='5' and calificacion='2' order by calificacion");
                while($row = mysqli_fetch_array($contar5_2)) { 
            	$v5_2=$row["count(*)"];
            	 }
            	 $contar5_1 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='5' and calificacion='1' order by calificacion");
                while($row = mysqli_fetch_array($contar5_1)) { 
            	$v5_1=$row["count(*)"];
            	 }////////////////////////////////////////////////////////////////////////////////
            	  $contar6_5 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='6' and calificacion='5' order by calificacion");
                while($row = mysqli_fetch_array($contar6_5)) { 
            	$v6_5=$row["count(*)"];
            	 }
            	$contar6_4 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='6' and calificacion='4' order by calificacion");
                while($row = mysqli_fetch_array($contar6_4)) { 
            	$v6_4=$row["count(*)"];
            	 }
            	 $contar6_3 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='6' and calificacion='3' order by calificacion");
                while($row = mysqli_fetch_array($contar6_3)) { 
            	$v6_3=$row["count(*)"];
            	 }
            	 $contar6_2 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='6' and calificacion='2' order by calificacion");
                while($row = mysqli_fetch_array($contar6_2)) { 
            	$v6_2=$row["count(*)"];
            	 }
            	 $contar6_1 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='6' and calificacion='1' order by calificacion");
                while($row = mysqli_fetch_array($contar6_1)) { 
            	$v6_1=$row["count(*)"];
            	 }////////////////////////////////////////////////////////////////////////////////
                  $contar7_5 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='7' and calificacion='5' order by calificacion");
                while($row = mysqli_fetch_array($contar7_5)) { 
            	$v7_5=$row["count(*)"];
            	 }
            	$contar7_4 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='7' and calificacion='4' order by calificacion");
                while($row = mysqli_fetch_array($contar7_4)) { 
            	$v7_4=$row["count(*)"];
            	 }
            	 $contar7_3 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='7' and calificacion='3' order by calificacion");
                while($row = mysqli_fetch_array($contar7_3)) { 
            	$v7_3=$row["count(*)"];
            	 }
            	 $contar7_2 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='7' and calificacion='2' order by calificacion");
                while($row = mysqli_fetch_array($contar7_2)) { 
            	$v7_2=$row["count(*)"];
            	 }
            	 $contar7_1 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='7' and calificacion='1' order by calificacion");
                while($row = mysqli_fetch_array($contar7_1)) { 
            	$v7_1=$row["count(*)"];
            	 }////////////////////////////////////////////////////////////////////////////////
                $contar8_5 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='8' and calificacion='5' order by calificacion");
                while($row = mysqli_fetch_array($contar8_5)) { 
            	$v8_5=$row["count(*)"];
            	 }
            	$contar8_4 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='8' and calificacion='4' order by calificacion");
                while($row = mysqli_fetch_array($contar8_4)) { 
            	$v8_4=$row["count(*)"];
            	 }
            	 $contar8_3 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='8' and calificacion='3' order by calificacion");
                while($row = mysqli_fetch_array($contar8_3)) { 
            	$v8_3=$row["count(*)"];
            	 }
            	 $contar8_2 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='8' and calificacion='2' order by calificacion");
                while($row = mysqli_fetch_array($contar8_2)) { 
            	$v8_2=$row["count(*)"];
            	 }
            	 $contar8_1 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='8' and calificacion='1' order by calificacion");
                while($row = mysqli_fetch_array($contar8_1)) { 
            	$v8_1=$row["count(*)"];
            	 }////////////////////////////////////////////////////////////////////////////////
            	 $contar9_5 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='9' and calificacion='5' order by calificacion");
                while($row = mysqli_fetch_array($contar9_5)) { 
            	$v9_5=$row["count(*)"];
            	 }
            	$contar9_4 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='9' and calificacion='4' order by calificacion");
                while($row = mysqli_fetch_array($contar9_4)) { 
            	$v9_4=$row["count(*)"];
            	 }
            	 $contar9_3 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='9' and calificacion='3' order by calificacion");
                while($row = mysqli_fetch_array($contar9_3)) { 
            	$v9_3=$row["count(*)"];
            	 }
            	 $contar9_2 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='9' and calificacion='2' order by calificacion");
                while($row = mysqli_fetch_array($contar9_2)) { 
            	$v9_2=$row["count(*)"];
            	 }
            	 $contar9_1 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='9' and calificacion='1' order by calificacion");
                while($row = mysqli_fetch_array($contar9_1)) { 
            	$v9_1=$row["count(*)"];
            	 }////////////////////////////////////////////////////////////////////////////////

            	 $sumaMultiplicaciones1  =($v1_1 * 1)+($v1_2 * 2)+( $v1_3 * 3)+( $v1_4 * 4)+($v1_5 * 5);
            	 $VotosContar1 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='1' order by calificacion");
                while($row = mysqli_fetch_array($VotosContar1)) { 
            	$votosTotales1 =$row["count(*)"];
            	$VotosFin1 = $sumaMultiplicaciones1 / $votosTotales1;
            	 }//////////////////////////////////////////////////////////////////////////////////////////
     
            	 $sumaMultiplicaciones2  = ($v2_1 * 1)+($v2_2 * 2)+( $v2_3 * 3)+( $v2_4 * 4)+($v2_5 * 5);
            	 $VotosContar2 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='2' order by calificacion");
                while($row = mysqli_fetch_array($VotosContar2)) { 
            	$votosTotales2=$row["count(*)"];
            	$VotosFin2 = $sumaMultiplicaciones2 / $votosTotales2;
            	 }//////////////////////////////////////////////////////////////////////////////////////////
            	 $sumaMultiplicaciones3  = ($v3_1 * 1)+($v3_2 * 2)+( $v3_3 * 3)+( $v3_4 * 4)+($v3_5 * 5);
            	 $VotosContar3 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='3' order by calificacion");
                while($row = mysqli_fetch_array($VotosContar3)) { 
            	$votosTotales3=$row["count(*)"];
            	$VotosFin3 = $sumaMultiplicaciones3 / $votosTotales3;
            	 }//////////////////////////////////////////////////////////////////////////////////////////
            	$sumaMultiplicaciones4  = ($v4_1 * 1)+($v4_2 * 2)+( $v4_3 * 3)+( $v4_4 * 4)+($v4_5 * 5);
            	 $VotosContar4 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='4' order by calificacion");
                while($row = mysqli_fetch_array($VotosContar4)) { 
            	$votosTotales4=$row["count(*)"];
            	$VotosFin4 = $sumaMultiplicaciones4 / $votosTotales4;
            	 }//////////////////////////////////////////////////////////////////////////////////////////
            	 $sumaMultiplicaciones5  = ($v5_1 * 1)+($v5_2 * 2)+( $v5_3 * 3)+( $v5_4 * 4)+($v5_5 * 5);
            	 $VotosContar5 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='5' order by calificacion");
                while($row = mysqli_fetch_array($VotosContar5)) { 
            	$votosTotales5=$row["count(*)"];
            	$VotosFin5 = $sumaMultiplicaciones5 / $votosTotales5;
            	 }//////////////////////////////////////////////////////////////////////////////////////////
            	  $sumaMultiplicaciones6  = ($v6_1 * 1)+($v6_2 * 2)+( $v6_3 * 3)+( $v6_4 * 4)+($v6_5 * 5);
            	 $VotosContar6 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='6' order by calificacion");
                while($row = mysqli_fetch_array($VotosContar6)) { 
            	$votosTotales6=$row["count(*)"];
            	$VotosFin6 = $sumaMultiplicaciones6 / $votosTotales6;
            	 }//////////////////////////////////////////////////////////////////////////////////////////
            	   $sumaMultiplicaciones7  = ($v7_1 * 1)+($v7_2 * 2)+( $v7_3 * 3)+( $v7_4 * 4)+($v7_5 * 5);
            	 $VotosContar7 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='7' order by calificacion");
                while($row = mysqli_fetch_array($VotosContar7)) { 
            	$votosTotales7=$row["count(*)"];
            	$VotosFin7 = $sumaMultiplicaciones7 / $votosTotales7;
            	 }//////////////////////////////////////////////////////////////////////////////////////////
            	  $sumaMultiplicaciones8  = ($v8_1 * 1)+($v8_2 * 2)+( $v8_3 * 3)+( $v8_4 * 4)+($v8_5 * 5);
            	 $VotosContar8 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='8' order by calificacion");
                while($row = mysqli_fetch_array($VotosContar8)) { 
            	$votosTotales8=$row["count(*)"];
            	$VotosFin8 = $sumaMultiplicaciones8 / $votosTotales8;
            	 }//////////////////////////////////////////////////////////////////////////////////////////
            	  $sumaMultiplicaciones9  = ($v9_1 * 1)+($v9_2 * 2)+( $v9_3 * 3)+( $v9_4 * 4)+($v9_5 * 5);
            	 $VotosContar9 =mysqli_query($link,"select count(*) from DATOS where id_area='2' and id_pregunta='9' order by calificacion");
                while($row = mysqli_fetch_array($VotosContar9)) { 
            	$votosTotales9=$row["count(*)"];
            	$VotosFin9 = $sumaMultiplicaciones9 / $votosTotales9;
            	 }//////////////////////////////////////////////////////////////////////////////////////////
            	 $promedio = ($VotosFin9+$VotosFin8+$VotosFin7+$VotosFin6+$VotosFin5+$VotosFin4+$VotosFin3+$VotosFin2+$VotosFin1)/9;
            	 /////////////////////////////////////////
            	
                 ?>
                 
            <tr>
                <td class="tg-0pky">1- Tiene un horario adecuado de consulta</td>
                <td class="tg-c3ow"><?php echo $v1_1 ?></td>
                <td class="tg-0lax"><?php echo $v1_2 ?></td>
                <td class="tg-0lax"><?php echo $v1_3 ?></td>
                <td class="tg-0lax"><?php echo $v1_4 ?></td>
                <td class="tg-0lax"><?php echo $v1_5 ?></td>
                <td class="tg-0pky"><?php echo round($VotosFin1,1);?> </td>
            </tr>
          <tr>
            <td class="tg-0pky">2- La información con la que cuenta me apoya en las asignaturas que curso</td>
            <td class="tg-c3ow"><?php echo $v2_1 ?></td>
            <td class="tg-0lax"><?php echo $v2_2 ?></td>
            <td class="tg-0lax"><?php echo $v2_3 ?></td>
            <td class="tg-0lax"><?php echo $v2_4 ?></td>
            <td class="tg-0lax"><?php echo $v2_5 ?></td>
            <td class="tg-0pky"><?php echo round($VotosFin2,1);?></td>
          </tr>
          <tr>
            <td class="tg-0pky">3- Siempre encuentro por lo menos un ejemplar disponible de la bibliografía señalada en las asignaturas que curso</td>
            <td class="tg-c3ow"><?php echo $v3_1 ?></td>
            <td class="tg-0lax"><?php echo $v3_2 ?></td>
            <td class="tg-0lax"><?php echo $v3_3 ?></td>
            <td class="tg-0lax"><?php echo $v3_4 ?></td>
            <td class="tg-0lax"><?php echo $v3_5 ?></td>
            <td class="tg-0pky"><?php echo round($VotosFin3,1);?></td>
          </tr>
          <tr>
            <td class="tg-0pky">4- La bibliografpia de la que se dispone es actualizada</td>
            <td class="tg-c3ow"><?php echo $v4_1 ?></td>
            <td class="tg-0lax"><?php echo $v4_2 ?></td>
            <td class="tg-0lax"><?php echo $v4_3 ?></td>
            <td class="tg-0lax"><?php echo $v4_4 ?></td>
            <td class="tg-0lax"><?php echo $v4_5 ?></td>
            <td class="tg-0pky"><?php echo round($VotosFin4,1);?></td>
          </tr>
          <tr>
            <td class="tg-0pky">5- Se me proporciona atención adecuada en caso de buscar determinado libro</td>
           <td class="tg-c3ow"><?php echo $v5_1 ?></td>
            <td class="tg-0lax"><?php echo $v5_2 ?></td>
            <td class="tg-0lax"><?php echo $v5_3 ?></td>
            <td class="tg-0lax"><?php echo $v5_4 ?></td>
            <td class="tg-0lax"><?php echo $v5_5 ?></td>
            <td class="tg-0pky"><?php echo round($VotosFin5,1);?></td>
          </tr>
          <tr>
            <td class="tg-0pky">6- Me orientan adecuadamente para encontrar en caso de carencia, libros equivalentes al requerido</td>
           <td class="tg-c3ow"><?php echo $v6_1 ?></td>
            <td class="tg-0lax"><?php echo $v6_2 ?></td>
            <td class="tg-0lax"><?php echo $v6_3 ?></td>
            <td class="tg-0lax"><?php echo $v6_4 ?></td>
            <td class="tg-0lax"><?php echo $v6_5 ?></td>
            <td class="tg-0pky"><?php echo round($VotosFin6,1);?></td>
          </tr>
          <tr>
            <td class="tg-0pky">7- Tienen disposición para atenderme cuando solicito un servicio</td>
           <td class="tg-c3ow"><?php echo $v7_1 ?></td>
            <td class="tg-0lax"><?php echo $v7_2 ?></td>
            <td class="tg-0lax"><?php echo $v7_3 ?></td>
            <td class="tg-0lax"><?php echo $v7_4 ?></td>
            <td class="tg-0lax"><?php echo $v7_5 ?></td>
            <td class="tg-0pky"><?php echo round($VotosFin7,1);?></td>
          </tr>
          <tr>
            <td class="tg-0pky">8- Me atienden en forma amable cuando solicito su apoyo</td>
          <td class="tg-c3ow"><?php echo $v8_1 ?></td>
            <td class="tg-0lax"><?php echo $v8_2 ?></td>
            <td class="tg-0lax"><?php echo $v8_3 ?></td>
            <td class="tg-0lax"><?php echo $v8_4 ?></td>
            <td class="tg-0lax"><?php echo $v8_5 ?></td>
            <td class="tg-0pky"><?php echo round($VotosFin8,1);?></td>
          </tr>
          <tr>
            <td class="tg-0pky">9- Mantienen una relación atenta conmigo durante mi estancia</td>
            <td class="tg-c3ow"><?php echo $v9_1 ?></td>
            <td class="tg-0lax"><?php echo $v9_2 ?></td>
            <td class="tg-0lax"><?php echo $v9_3 ?></td>
            <td class="tg-0lax"><?php echo $v9_4 ?></td>
            <td class="tg-0lax"><?php echo $v9_5 ?></td>
            <td class="tg-0pky"><?php echo round($VotosFin9,1);?></td>
          </tr>
          
           <tr>
            <td colspan="6">Promedio</td>
              
            <td class="tg-0pky"><?php echo round($promedio,1)?></td>
          </tr>
        </table>
               <script type="text/javascript">
        var depa1=" <?php echo $VotosFin1?>";
        var depa2=" <?php echo  $VotosFin2?>";
        var depa3=" <?php echo  $VotosFin3?>";
        var depa4=" <?php echo  $VotosFin4?>";
        var depa5=" <?php echo  $VotosFin5?>";
        var depa6=" <?php echo  $VotosFin6?>";
        var depa7=" <?php echo  $VotosFin7?>";
        var depa8=" <?php echo  $VotosFin8?>";
        var depa9=" <?php echo  $VotosFin9?>";
 
    </script>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Resultado de las encuestas</title>
</head>
<body>
     <br/>
    <br/>
    <br/>
    <br/>
     <br/>
  
<!--    </TABLE>-->
  <div class="container">
    <canvas id="myChart"></canvas>
  </div>
    
  <script>
   
    
  
    let myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['1', '2','3', '4', '5', '6', '7','8','9'],
        datasets:[{
          label:'Calificación',
          data:[
            depa1,
            depa2,
            depa3,
            depa4,
            depa5,
            depa6,
            depa7,
            depa8,
            depa9

          ],
          backgroundColor:'red',
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Calificación por pregunta',
          fontSize:25
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
  </script>
  <br/>
  <br/>
 
  <div align="center">
      <input  type="button" value="Imprimir reporte" onclick="window.print()">
  </div>
    
    <br/>
    <br/>
    <br/>
    <br/>
     <br/>

     
        </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
	</body>
</html>