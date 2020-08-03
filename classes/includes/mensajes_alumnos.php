<?php
$user_id = $_SESSION['id'];
$lista = consultachatSQL("SELECT DISTINCT Nombre FROM `$user_id` WHERE estado=0 AND Nombre!='$user_id' ");
$lista_personas = [];

if($lista){
    while($persona = mysqli_fetch_assoc($lista)){

        $lista_personas [] = $persona['Nombre'];

    }
}

$i = 0;  
$numero = count($lista_personas);

while($numero > $i){
    $person = $lista_personas[$i];
    
    $msg = consultachatSQL(" SELECT Nombre FROM `$user_id` WHERE Nombre='$person' AND estado = 0"); #0 el no leido 1 es leido
    
    if($msg){
        $n_msg = $msg->num_rows;
        $mensaje = mysqli_fetch_assoc($msg);
        $UserMsg = new Alumno($mensaje['Nombre']);
               
            
               if($n_msg == 1){
                echo

                '<html>
                
                    <li>
                    <a href="./panel/read-mail.php?id='.$user_id.'&id_alumno='.$UserMsg->identificador.'">
                        <i class="fa fa-user  text-aqua"></i>'. $n_msg .' Mensaje Nuevo de '. $UserMsg->nombre. " " . $UserMsg->apellido .'
                    </a>
                    </li>

                </html>
                ';
               }else{
                echo

                '<html>
                
                    <li>
                    <a href="./panel/read-mail.php?id='.$user_id.'&id_alumno='.$UserMsg->identificador.'">
                        <i class="fa fa-user  text-aqua"></i>'. $n_msg .' Mensajes Nuevos de '. $UserMsg->nombre. " " . $UserMsg->apellido .'
                    </a>
                    </li>

                </html>
                ';
               }
            
        
    }
    $i +=1;
}















?>