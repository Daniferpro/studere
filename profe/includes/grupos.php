<?php

    $materia_prof = $usuario['materias'];
    $tablas = gruposSQL(" SELECT * WHERE  ");
    if($consulta_clases_prof = gruposSQL(" SELECT * FROM $materia_prof")):
    
    while($clases = mysqli_fetch_assoc($consulta_clases_prof)):


    ?>

    <html>

        <tr>
        <td><?php echo $clases['Nombre'];?></td>
        <td><?php echo $clases['Horario'];?></td>
        <td><?php echo $clases['dia_inicio'];?></td>
        <td><?php echo $clases['dia_fin'];?></td>

        <td><a href="<?php echo $clases['link_vc'];?>"><?php echo $clases['link_vc'];?></a></td>
        <td>
            <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $clases['Contraseña_vc']; ?></div>
        </td>
        <td><?php echo $clases['descripcion'];?></td>
        <td><a href="./modificar_grupo.php?id=<?php echo $id.'&grupo='.$clases['id'];?>">Modificar</a></td>
       
        
        </tr>

    </html>
<?php 
    
    endwhile; 
    endif;
    if(gruposSQL(" SELECT * FROM $materia_prof")->num_rows == 0){

        echo"
        <td>No Hay ningun Grupo de Video Conferencias Creadas hasta el momento</td>
        
        ";
    }

    
            
?>
