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

    $chats = consultachatSQL(" SELECT * FROM `$id_alumno` WHERE materia='$materia_profe'"); #0 el no leido 1 es leido
   
    

    
    if($chats){
        $mensaje = mysqli_fetch_assoc($chats);
        $numero_mensajes = $chats->num_rows;
        $msg = consultachatSQL(" SELECT * FROM `$id_alumno` WHERE materia='$materia_profe' AND estado=0 AND Nombre!='$nombre_prof'"); #0 el no leido 1 es leido
        if($msg){
            $msg_2 = $msg->num_rows;

            if($msg_2 == 0){
                $mensaje_del_sistema = '<td class="mailbox-subject"><b>Sin Mensajes Nuevos:</b> ir a lista de mensajes.';
            }else{
                $mensaje_del_sistema = '<td class="mailbox-subject"><b>Usted Tiene: </b> '.$msg_2.' mensajes sin leer.';
            }
        }
        $nombre_alumno = mysqli_fetch_assoc(consultarSQL("SELECT * FROM usuario WHERE id='$id_alumno' "));
        $nombre_alumno = $nombre_alumno['Nombre'] . " " . $nombre_alumno['Apellido'];
        echo

        '<html>
        
        <tr>
        
        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.php?id='.$id_profe.'&id_alumno='.$id_alumno.'">'.$nombre_alumno.'</a></td>
        '. $mensaje_del_sistema.'
        </td>
        <td class="mailbox-attachment"></td>
        <td class="mailbox-date">'.$mensaje['fecha'].'</td>
        <form action="#" method="post">
        <td><input hidden name="alumno" value="'.$id_alumno.'"></td>
        <td><button type="submit"  class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button></td>
                  
        </form>
        </tr>

        </html>
        
        ';
    }

    $i++;
}










?>