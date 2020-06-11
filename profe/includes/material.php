<?php

    $materia_prof = $usuario['materias'];
    $consulta_clases_prof = gruposSQL(" SELECT * FROM $materia_prof ");
    if($consulta_clases_prof->num_rows>0):
        while($clases = mysqli_fetch_assoc($consulta_clases_prof)):


        ?>

        <html>

            <tr>
             
            <td><?php echo $clases['id'];?></td>
            <td><?php echo $clases['Nombre'];?></td>

            <td><?php echo $clases['dia_fin'];?></td>
            <td>
                <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $clases['Horario']; ?></div>
            </td>
            <td>
                <div class="sparkbar" data-color="#00a65a" data-height="20"><?php  echo $clases['Dias']; ?>
                
                </div>
            </td>
            <td>
                <div class="sparkbar" data-color="#00a65a" data-height="20"><?php  echo $clases['nivel']; ?>
                
                </div>
            </td>
            <td>
              <li>  <a href="./editar_clase.php?id=<?php echo $usuario['id'].'&clase='.$clases['id'];?>" class="sparkbar" data-color="#00a65a" data-height="20">Editar
                
        </a></li>
       <li> <a href="./upload.php?id=<?php echo $usuario['id'].'&clase='.$clases['id'];?>" class="sparkbar" data-color="#00a65a" data-height="20">Subir Material
                
                </a></li>
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