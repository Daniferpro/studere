<?php

    $materia_prof = $usuario['materias'];
    $consulta_clases_prof = consultaclasesSQL(" SELECT * FROM $materia_prof WHERE id_clase=$id_grupo ");

    if($consulta_clases_prof):
        if($consulta_clases_prof->num_rows>0):
            while($clases = mysqli_fetch_assoc($consulta_clases_prof)):


            ?>

            <html>

                <tr>
                <td><?php echo $clases['id_clase'];?></td> 
                <td><?php echo $clases['link_grabacion'];?></td>

                <td><?php echo $clases['contraseña'];?></td>
            
                <td>
                    <div class="sparkbar" data-color="#00a65a" data-height="20"><?php  echo $clases['fecha']; ?>
                    
                    </div>
                </td>
                

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