<?php
  
  $consulta=ConsultarProducto($_GET['no']);

  function ConsultarProducto( $no_prod )
  {
   include 'conexion.php';
   $sentencia="SELECT * FROM productos WHERE no='".$no_prod."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['rol'],
    $fila['username'],
    $fila['correo']
   ];
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Producto</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="assets/images/images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Datos</h1> </span>
  		<br>
	  <form action="modif2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="no"  value="<?php echo $_GET['no']?>">
  		<label>Rol: </label>
  		<input type="text" id="rol" name="rol" value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label>Nombres: </label>
  		<input type="text" id="username" name="username" value="<?php echo $consulta[1] ?>"><br>

      <label>Correo: </label>
  		<input type="text" id="correo" name="correo" value="<?php echo $consulta[2] ?>"><br>
  		
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="assets/images/images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>