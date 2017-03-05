<?php

include "conexion.php";
echo "entro"
$Idser=$_POST['Id'];

$sql="DELETE FROM servicios where id_Servicios =$Idser";
$resp=mysqli_query($conn,$sql);
echo "borro"
if($resp){
echo "el registro fue eliminado correctamente"
	}
}else{
	echo "Ocurrio un error al eliminar el registro".mysqli_error();
}
mysqli_close($conn);

?>