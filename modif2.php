<?php
	
	ModificarProducto($_POST['no'], $_POST['rol'], $_POST['username'], $_POST['correo'] );

	function ModificarProducto($no, $rol, $username, $correo)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE productos SET rol='".$rol."', username='".$username."', correo='".$correo."' WHERE no='".$no."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='user_date_table.php';
</script>