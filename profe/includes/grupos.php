<?php

    $materia_prof = $usuario['materias'];
    $tablas = gruposSQL(" SELECT * WHERE  ");
    if($consulta_clases_prof = gruposSQL(" SELECT * FROM $materia_prof")):
    
    while($clases = mysqli_fetch_assoc($consulta_clases_prof)):


    ?>

    <html>

        <tr>
        <td><?php echo $clases['grupo'];?></td>
        <td><?php echo $clases['Horario'];?></td>
        <td><?php echo $clases['Dia'];?></td>

        <td><a href="<?php echo $clases['link_vc'];?>"><?php echo $clases['link_vc'];?></a></td>
        <td>
            <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $clases['Contraseña_vc']; ?></div>
        </td>
        <td><a href="./modificar_grupo.php?id=<?php echo $id.'&grupo='.$clases['grupo'];?>">Modificar</a></td>
       
        
        </tr>

    </html>
<?php 
    
    endwhile; 
    endif;
            
?>
