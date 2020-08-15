<?php
function Conectarse()
{
 if (!($link=mysqli_connect("localhost", "id6987858_usuario", "12345")))
 {
 echo "Error conectando a la base de datos.";
 exit();
 }
 if (!mysqli_select_db($link, "id6987858_datos"))
 {
 echo "Error seleccionando la base de datos.";
 exit();
 }
 return $link;
}
?>