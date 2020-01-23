<?php
 ini_set('SMTP','myserver');
 ini_set('smtp_port',465);
//creamos funcion para envio de mails desde la plataforma

function Enviar_mails(){

$nombre = $_GET['nombre'];
$texto = $_GET['mensaje'];
$celular = $_GET['celular'];
$opcion = $_GET['counter_select'];
$usuario = $_SESSION['email'];
$destinatario = 'daniferpro3@gmail.com';
$mensaje = 'Éste es un mensaje de' . $nombre . $usuario .  $celular.  'Opcion:'. $opcion . 'Mensaje:  ' . $texto . 'Enviado desde Studere Plataforma';



//enviamos el mensaje a mi email
mail('daniferpro3@gmail.com', 'SÚMATE AHORA', $mensaje);

//enviamos el mismo mensaje al usuario
mail($usuario, 'Studere Platform', $mensaje);




}

//ejecutamos la fncion de enviar mails

Enviar_mails();

if(Enviar_mails()){

    echo "<script> alert('Perfecto! nos pondremos en contacto con tigo dentro de 24 Horas. Muchas Gracias !'); </script>";

}else{

    echo "<script> alert('UPSS, Parece que algo salió mal. Intenta de Nuevo!'); </script>";


}

?>