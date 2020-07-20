<?php

include "./procesos/conecciones.php";

$hola=$_GET['email'];
$query="SELECT * FROM usuario WHERE email='$hola' ";
$consulta=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta);
$nombre=$a['Nombre'].$a['Apellido'];
$materia=$_GET['materia'];
	///consultamos a la base para cada materia copiar el chat y configurar su resultado 
	$consulta = "SELECT * FROM $nombre ORDER BY fecha DESC ";
	$ejecutar = consultachatSQL($consulta);
	
	if($fila = $ejecutar->fetch_assoc()) :
	
?>
	 <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name"><a href="redactar_mensajes.php?<?php echo "materia=" . $materia . "&chat=" . $nombre?>"><?php echo $fila['materia'];?></td>
                    <td class="mailbox-subject"><b>Ver mensajes del chat con el profesor responsable de ésta asignatura</b> 
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"><?php echo $fila['fecha'];?></td>
                  </tr>
	
	<?php 
	
else:
	
	?>

<tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Crear Mensaje  </td>
                    <td class="mailbox-subject"><b>Aún no tienes chats activos,  ¿Que esperas?  Redacta tu Primer Mensaje..</b> 
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date"><?php  echo date('d-m-y') ?></td>
                  </tr>

	<?php
	endif;
	
	 ?>