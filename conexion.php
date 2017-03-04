<?php
/*$servidor="localhost";
$usuario="root";
$pws="";
$bd="catalogo";*/
$servidor="mysql.hostinger.mx";
$usuario="u901265107_angel";
$pws="dafne832";
$bd="u901265107_servi";



$conn=mysqli_connect($servidor,$usuario,$pws,$bd)or die("error al conectarse a la base de datos".mysql_error());

?>
