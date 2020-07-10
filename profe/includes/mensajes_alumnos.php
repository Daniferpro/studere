<?php
$id_profe = $User->identificador;

$materia_profe = mysqli_fetch_assoc(consultarSQL("SELECT * FROM usuario WHERE id='$id_profe' "));
$materia_profe = $User->materia;
$lista = consultarSQL("SELECT * FROM clases WHERE Profesor='$id_profe' ");
$lista_alumnos = [];
$nombre_prof = $User->nombre . " " . $User->apellido;

while($clase = mysqli_fetch_assoc($lista)){

    $lista_alumnos [] = $clase['Alumno'];
 
}

$i = 0;
$numero = count($lista_alumnos); 

while($numero > $i){
   
    $id_alumno = $lista_alumnos[$i]; # seleccionar de la lista_alumnos

    $chats = consultachatSQL(" SELECT * FROM `$id_alumno` WHERE materia='$materia_profe' AND estado=0 AND Nombre!='$nombre_prof'"); #0 el no leido 1 es leido

    if($chats){
        $mensaje = mysqli_fetch_assoc($chats);
        $numero_mensajes = $chats->num_rows;
        if($numero_mensajes == 0){ echo NULL;}else{
        echo

        '<html>
        
            <li>
            <a href="./read-mail.php?id='.$id_profe.'&id_alumno='.$id_alumno.'">
                <i class="fa fa-user  text-aqua"></i>'. $numero_mensajes .' Mensajes No Leidos de '. $mensaje['Nombre'].'
            </a>
            </li>

        </html>
        ';
    }}

    $i++;
}










?>