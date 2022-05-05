<?php

	
	NuevoProducto($_POST['rol'], $_POST['username'], $_POST['correo']);
	
	function NuevoProducto($id_prod, $nom, $descrip)
	{
		include 'conexion.php';
		$sentencia= "INSERT INTO productos (rol, username, correo) VALUES ('".$id_prod."', '".$nom."', '".$descrip."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Usario Ingresado Exitosamante!!");
	window.location.href='user_date_table.php';
</script>