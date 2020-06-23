<?php
$id_profe = $_GET['id'];

$materia_profe = mysqli_fetch_assoc(consultarSQL("SELECT * FROM usuario WHERE id='$id_profe' "));
$materia_profe = $materia_profe['materias'];
$lista = consultarSQL("SELECT * FROM clases WHERE Profesor='$id_profe' ");
$lista_alumnos = [];
$nombre_prof = $usuario['Nombre']. " " .$usuario['Apellido'];

while($clase = mysqli_fetch_assoc($lista)){

    $lista_alumnos [] = $clase['Alumno'];

}



$i = 0;
$numero = count($lista_alumnos); 

while($numero > $i){
   
    $id_alumno = $lista_alumnos[$i]; # seleccionar de la lista_alumnos

    $alumno = consultarSQL(" SELECT * FROM `usuario` WHERE id='$id_alumno'"); #0 el no leido 1 es leido
   
    

    
    if($alumno){
        
        $alumno = mysqli_fetch_assoc($alumno);
        
        
        echo

        '
        <li><a href="read-mail.php?id='.$id_profe.'&id_alumno='.$id_alumno.'"><i class="fa fa-user-o"></i>'.$alumno['Nombre'] . " " .$alumno['Apellido'].'</a></li>
        
        ';
    
    
    }

    $i++;
}
if($numero == 0){
    echo

            '
            <li><a href=#"><i class="fa fa-user-o"></i> Upss! Aun No tienes Alumnos</a></li>
            
            ';

}










?>