<?php
function formatearFecha($fecha){
  return date('g:i a', strtotime($fecha));
}

include "../includes/conecciones.php";
include "../includes/objetos.php";
// $nombre=$_GET['chat'];
  $id_alumno = $_GET['id_alumno'];
  $idUser = $_GET['id']; 
  ///consultamos a la base para cada materia copiar el chat y configurar su resultado 
  $consulta = "SELECT * FROM `$idUser` WHERE destinatario='$idUser' OR destinatario='$id_alumno' ORDER BY id ASC ";
  $ejecutar = consultachatSQL($consulta);  
  if($ejecutar): 
  while($fila = $ejecutar->fetch_assoc()) :
    $Usuario_2 = new Alumno($fila['Nombre']);
    if($fila['estado'] == 0){$estado = 0 ;}else{$estado = 1;}
    
  
?>
<div class="item">
                <img src="../dist/img/avatar5.png" alt="foto"  <?php if($fila['destinatario'] == $id_alumno){echo 'class="online"';}else{echo 'class="offline"';} ?>>

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php   echo $fila['fecha'] ; ?></small>
                    <?php echo $Usuario_2->nombre. " ". $Usuario_2->apellido ; ?>
                  </a>
                  <?php  echo $fila['mensaje'] ; ?>
                </p>
                 
              </div>
              

<?php 
endwhile;
else:

?>

<tr>

<td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
<td class="mailbox-name"><a href="">Upss! </td>
<td class="mailbox-subject"><b> Aún no tienes ningun mensaje con este alumno/a,  ¿Que esperas?  Redacta tu Primer Mensaje..</b> 
</td>
<td class="mailbox-attachment"></td>

</tr>

<?php
endif;

?>
<!-- aquí aparece la interfaz de chat  -->
