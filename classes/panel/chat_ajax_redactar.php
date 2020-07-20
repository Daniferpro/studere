<?php

include "./procesos/conecciones.php";

function formatearFecha($fecha){
	return date('g:i a', strtotime($fecha));
}

$hola=$_GET['email'];
$query="SELECT * FROM usuario WHERE email='$hola' ";
$consulta=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta);
$nombre=$a['Nombre'].$a['Apellido'];
$materia=$_GET['materia'];
	///consultamos a la base para cada materia copiar el chat y configurar su resultado 
	$consulta = "SELECT * FROM $nombre ORDER BY fecha DESC ";
  $ejecutar = consultachatSQL($consulta);
  $consulta2 = "SELECT * FROM $materia";
  $ejecutar2 = consultaclasesSQL($consulta2)->fetch_assoc();

	if($ejecutar):
	while($fila = $ejecutar->fetch_assoc()) :
	
?>
	 <tr>
                                  
                    <td class="mailbox-name"><?php echo $fila['Nombre'];?></td>
                    <td class="mailbox-subject"><b><?php echo $fila['mensaje'] ?></b> 
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"><?php echo formatearFecha($fila['fecha']);?></td>
                  </tr>
	
	<?php 
	endwhile;
else:
	
	?>

<tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Mensajes</td>
                    <td class="mailbox-subject"><b>Aún no tienes chats activos,  ¿Que esperas?  Redacta tu Primer Mensaje..</b> 
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"><?php  echo date('d-m-y') ?></td>
                  </tr>

	<?php
	endif;
	
	 ?>