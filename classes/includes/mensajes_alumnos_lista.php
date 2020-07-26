<?php
$user_id = $_SESSION['id'];
$userFullName= $User->nombre . " " . $User->apellido;

$chats = consultachatSQL(" SELECT * FROM `$user_id` WHERE estado=0 AND Nombre!='$user_id'"); #0 el no leido 1 es leido
while($msg = mysqli_fetch_assoc($chats) ){
     
    if($msg){
        $Alumno_msg =new Alumno($msg['Nombre']); #$msg['Nombre'] = id del remitente
 
        $numero_mensajes = $chats->num_rows;
         

            if($msg_2 == 0){
                $mensaje_del_sistema = '<td class="mailbox-subject"><b>Sin Mensajes Nuevos:</b> ir a lista de mensajes.';
            }else{
                $mensaje_del_sistema = '<td class="mailbox-subject"><b>Usted Tiene: </b> '.$msg_2.' mensajes sin leer.';
            }
        
        $nombre_alumno = $Alumno_msg->nombre ." ". $Alumno_msg->apellido; 
        echo

        '<html>
        
        <tr>
        
        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
        <td class="mailbox-name"><a href="read-mail.php?id=&id_alumno='.$id_alumno.'">'.$nombre_alumno.'</a></td>
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