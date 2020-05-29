<?php

    $materia_prof = $usuario['materias'];
    $consulta_clases_prof = ciclobasicoSQL(" SELECT * FROM $materia_prof ");
    if($consulta_clases_prof->num_rows > 0):
        while($clases = mysqli_fetch_assoc($consulta_clases_prof)):


        ?>

        <html>

            <tr>
            
            <td><?php echo $clases['nombre_clase'];?></td>

            <td>$<?php echo $clases['precio'];?></td>
            <td>
                <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $clases['alumnos']; ?></div>
            </td>
            <td>
                <div class="sparkbar" data-color="#00a65a" data-height="20"><?php  echo $clases['Descripcion']; ?>
                
                </div>
            </td>
            
            </tr>

        </html>
    <?php  endwhile;
           else:
           ?>
                
           <html>
               <tr>
                    <td>Aun No hay clases Registradas</td>

               </tr>
           </html>
           <?php endif;?>