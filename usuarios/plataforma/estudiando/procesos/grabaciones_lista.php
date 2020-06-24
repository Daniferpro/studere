<?php 

$materia_prof = $_GET['materia'];
$id_grupo = $_GET['id_clase'];
    $consulta_clases_prof = consultaclasesSQL(" SELECT * FROM $materia_prof WHERE id_clase=$id_grupo ORDER BY fecha ASC");

    if($consulta_clases_prof):
        if($consulta_clases_prof->num_rows>0):
            while($clases = mysqli_fetch_assoc($consulta_clases_prof)):


            ?>

            <html>

                <li><i class=" fa fa-youtube-play"></i> <small> Fecha: </small><?php echo $clases['fecha'] ?><a href="<?php echo $clases['link_grabacion'];?>" target="_blank"> Clic para ver</a></li>
                

            </html>
    <?php  
            endwhile;
        else:
            ?>

<html>
               <tr>
                    <td>Aun No hay Grabaciones Registradas para el Grupo  <?php echo $id_grupo;?></td>

               </tr>
           </html>



            <?php
        endif;
        
    ?>


    <?php
    else:
    ?>
                
           <html>
               <tr>
                    <td>Aun No hay Grabaciones Registradas</td>

               </tr>
           </html>
           <?php
        
    endif;
    ?>