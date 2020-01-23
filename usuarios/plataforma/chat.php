<?php
	include "db.php";
	
$hola=$_SESSION['email'];
$query="SELECT * FROM usuario WHERE email='$hola' ";
$consulta=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta);
$nombre=$a['Nombre'].$a['Apellido'];
$materia=$_SESSION['materia'];
	///consultamos a la base para cada materia copiar el chat y configurar su resultado 
	$consulta = "SELECT * FROM $nombre ORDER BY id DESC LIMIT 10";
	$ejecutar = $conexion->query($consulta); 
	while($fila = $ejecutar->fetch_array()) :
		if($fila['materia']=="$materia"): 
?>
	<div id="datos-chat">
		<span style="color: #1C62C4;"><?php echo $fila['Nombre']; ?>:</span>
		<span style="color: #848484;"><?php echo $fila['mensaje']; ?></span>
		<span style="float: right;"><?php echo formatearFecha($fila['fecha']); ?></span>
	</div>
	
	<?php 
	endif;
	endwhile; ?>
