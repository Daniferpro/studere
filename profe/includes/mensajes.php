<?php
function formatearFecha($fecha){
  return date('g:i a', strtotime($fecha));
}

include "../../admin/includes/conecciones.php";
// $nombre=$_GET['chat'];
  $id_alumno = $_GET['id_alumno'];
  $id_profe = $_GET['id'];
  $consulta_datos_profe =mysqli_fetch_assoc(consultarSQL("SELECT * FROM usuario WHERE id='$id_profe' "));
  
  $materia_profe = $consulta_datos_profe['materias'];
  ///consultamos a la base para cada materia copiar el chat y configurar su resultado 
  $consulta = "SELECT * FROM `$id_alumno` WHERE materia='$materia_profe' ORDER BY id DESC ";
  $ejecutar = consultachatSQL($consulta);
  $datos_usuario = mysqli_fetch_assoc(consultarSQL("SELECT * FROM usuario WHERE id='$id_alumno'"));
  
  if($ejecutar): 
  while($fila = $ejecutar->fetch_assoc()) :
    
    if($fila['estado'] == 0){$estado = 0 ;}else{$estado = 1;}
    $nombre_completo = $datos_usuario['Nombre']. " " . $datos_usuario['Apellido'] ." ";
  
?>
<div class="item">
                <img src="../images\images/logoterminado.png" alt="foto"  <?php if($fila['Nombre'] == $nombre_completo){echo 'class="online"';}else{echo 'class="offline"';} ?>>

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php   echo $fila['fecha'] ; ?></small>
                    <?php echo $fila['Nombre'] ; ?>
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
