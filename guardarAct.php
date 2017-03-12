<?php
//Se Agrega el archivo que contine la conexion a la BD
include "conexion.php";
$id=$_POST['Id'];
$nom=$_POST['Nom'];
$dir=$_POST['Dir'];
$rfc=$_POST['Rfc'];
$tel=$_POST['Tel'];
$clasif=$_POST['Clasif'];
$foto="images/".$tel.".jpg";
$lat=$_POST['Lat'];
$longt=$_POST['Long'];


$sql="UPDATE servicios SET Nombre_servicio='$nom', Direccion='$dir', RFC='$rfc',Telefono='$tel',Latitud='$lat', Longitud='$longt' WHERE id=$id";
$res=mysqli_query($conexion,$sql);
if($res){
	echo "Los datos se actualizaron de manera exitosa";
	}else{
		  echo "Se produjo un error al momento de Actualizar los datos:".mysqli_error();
		}
mysqli_close($conexion);
?>
