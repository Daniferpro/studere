<?php
// include "./conecciones.php"; 
include_once './includes/usuarios_objeto.php';
$materia = $usuario['materias'];
$alumno_consulta= consultarSQL(" SELECT DISTINCT Alumno FROM clases WHERE Profesor='$id' ");#obtenemos un array de alumnos de esta materia

while($alumno = mysqli_fetch_assoc($alumno_consulta)):
    
    $id_alumno = $alumno['Alumno'];
    $datos_alumno_user = consultarSQL(" SELECT * FROM usuario WHERE id=$id_alumno ORDER BY id DESC ");


    while ($usuario = mysqli_fetch_assoc($datos_alumno_user)):

        $consulta2= consultarSQL("SELECT * FROM clases WHERE Alumno='$id_alumno' AND materia='$materia'");
    ?>

    <html>

        <tr>
        
        <td><a href="#"><?php echo $usuario['Nombre'] . " " . $usuario['Apellido'] ;?></a></td>

        
        <!-- aqui imprimimos la segunda tabla dentro de la proimera con los datos de cada clsae de cada alumno -->
        <td>
            
        <table class="table table-striped">
  <thead>
    <tr>
     
      <th scope="col">Nombre_clase</th>
      <th scope="col">Estado</th>
      <th scope="col">Fecha Inicio</th>
      <th scope="col">Fecha Fin</th>
    </tr>
  </thead>
  <tbody>
    
  
<!-- colocar inicio tabla 2 con el tbody debajo -->
                  <?php 
                  #imprimimos la segunda tabla co un while iterando en cada clase del alumno

                  while($course_2 = mysqli_fetch_assoc($consulta2)):
                    $id_clase = $course_2['id_clase'];
                    $consulta3 = gruposSQL("SELECT * FROM $materia WHERE id=$id_clase");

                  ?>
                  
                    <tr>
                        
                        <td><?php echo $course_2['Nombre_clase'];?></td>
                        <td  style="text-align: center;"  class="success"><?php echo $course_2['estado'];?></td>
                        <td><?php echo $course_2['fecha_inicio'];?></td>
                        <td><?php echo $course_2['fecha_fin'];?></td>
                    </tr>
                            
                    
                  <?php endwhile;?>
                    
  </tbody>
</table>
                 
                   <!-- colocar fin de la tabla 2 -->
            
        </td>
        </tr>

    </html>

    <?php endwhile;
            endwhile;?>

