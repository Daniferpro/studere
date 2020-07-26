<?php

$user_id = $_SESSION['id'];
$nombre_alumno = $Alumno->nombre . " " . $Alumno->apellido;
$lista = consultachatSQL("SELECT DISTINCT Nombre, materia FROM `$user_id` WHERE estado=0 AND Nombre!='$nombre_alumno' ");
$lista_personas = [];

if($lista){
    while($persona = mysqli_fetch_assoc($lista)){

        $lista_personas [] = [$persona['Nombre'],$persona['materia']];

    }
}

$i = 0;
$numero = count($lista_personas);

while($numero > $i){
    $person = $lista_personas[$i][0];
    $person_materia = $lista_personas[$i][1];
    $msg = consultachatSQL(" SELECT Nombre FROM `$user_id` WHERE Nombre='$person' AND estado = 0"); #0 el no leido 1 es leido
    
    if($msg){
        $n_msg = $msg->num_rows;
        $mensaje = mysqli_fetch_assoc($msg);
        $usuario = mysqli_fetch_assoc(consultarSQL("SELECT id FROM usuario WHERE materias='$person_materia'")); 
               
            
               if($n_msg == 1){
                echo

                '<html>
                
                    <li>
                    <a href="./panel/read-mail.php?id_alumno='.$usuario['id'].'">
                        <i class="fa fa-user  text-aqua"></i>'. $n_msg .' Mensaje Nuevo de '. $mensaje['Nombre'].'
                    </a>
                    </li>

                </html>
                ';
               }else{
                echo

                '<html>
                
                    <li>
                    <a href="./panel/read-mail.php?id_alumno='.$usuario['id'].'">
                        <i class="fa fa-user  text-aqua"></i>'. $n_msg .' Mensajes Nuevos de '. $mensaje['Nombre'].'
                    </a>
                    </li>

                </html>
                ';
               }
            
        
    }
    $i +=1;
}















?>