<?php
// include "./conecciones.php";
$materia = $usuario['materias'];
$consulta1= consultarSQL(" SELECT * FROM clases WHERE Profesor='$id'");
while($alumno = mysqli_fetch_assoc($consulta1)):
    
    $id_alumno = $alumno['Alumno'];
    $query = consultarSQL(" SELECT * FROM usuario WHERE id=$id_alumno ORDER BY id DESC ");


    while ($usuario = mysqli_fetch_assoc($query)):

        $consulta2= consultarSQL("SELECT * FROM fatura WHERE id_user='$id_alumno' AND materia='$materia'  ");
        $alumno_factura  = mysqli_fetch_assoc($consulta2);
        $precio_clase_alumno = $alumno_factura['valor'];
        $precio_clase_alumno = $precio_clase_alumno . 0;

        $materia_alumno = $alumno_factura['materia'];
      
        $consulta3 = gruposSQL("SELECT * FROM $materia WHERE Precio=$precio_clase_alumno");
              

        $tipo_clase = mysqli_fetch_assoc($consulta3);
        $tipo_clase = $tipo_clase['Nombre'];
        

    ?>

    <html>

        <tr>
        
        <td><a href="./detalle_usuario.php?id=<?php echo $id . "&userid=" . $usuario['id']; ?>"><?php echo $usuario['Nombre'] . " " . $usuario['Apellido'] ;?></a></td>

        <td><?php if($usuario['token'] == 1){ echo '<span class="label label-success">' . "VERIFICADO" . '</span>';}else{  echo '<span class="label label-danger">' . "PENDIENTE" . '</span>';} ?></td>
        <td>
            <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $alumno['fecha_inicio']; ?></div>
        </td>
        <td>
            <div class="sparkbar" data-color="#00a65a" data-height="20">

            <?php  
                    
                    echo $tipo_clase;
                    

                    // if($usuario['materias'] == "admin"){
                    //     echo "Admin";
                    // }elseif($usuario['materias'] == ""){
                    //     echo "Estud";
                    // }else{echo "Profe";}
            ?>
            
            </div>
        </td>
        </tr>

    </html>

    <?php endwhile;
            endwhile;?>