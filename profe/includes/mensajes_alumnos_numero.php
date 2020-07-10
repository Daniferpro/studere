<?php

# AQUI OBTENEMOS EL NUMERO DE MENSAJES NO LEIDOS PARA ESTE PROFESOR
$id_profe = $_GET['id'];

$materia_profe = mysqli_fetch_assoc(consultarSQL("SELECT * FROM usuario WHERE id='$id_profe' "));
$materia_profe = $materia_profe['materias'];
$lista = consultarSQL("SELECT DISTINCT Alumno FROM clases WHERE Profesor='$id_profe' ");
$lista_alumnos = [];
$mensajes = 0;
$nombre_prof =$User->nombre . " " . $User->apellido;

while($clase = mysqli_fetch_assoc($lista)){

    $lista_alumnos [] = $clase['Alumno'];

}

$i = 0;
$numero = count($lista_alumnos); 

while($numero > $i){
   
    $id_alumno = $lista_alumnos[$i]; # seleccionar de la lista_alumnos

    $chats = consultachatSQL(" SELECT * FROM `$id_alumno` WHERE materia='$materia_profe' AND estado=0 AND Nombre!='$nombre_prof' "); #0 el no leido 1 es leido
    $i++;
    if($chats){
        
        $numero_mensajes = $chats->num_rows;
        $mensajes += $numero_mensajes;
        
    }
    
    

}

if($mensajes == 0){
    echo NULL;
}else{
echo $mensajes;
}









?>