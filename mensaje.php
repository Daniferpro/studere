<?php
$app_name = $_POST['app'];
$sender   = $_POST['sender'];
$message  = $_POST['message'];

include "./includes/conectar.php";

$cons = consultarSQL("SELECT * FROM usuario");
$user_list = [];

// Bienvenido a Studere.uy 
// Selecione el número de opcion deseada:
// 1 - Cambiar contraseña
// 2 - salir

if((int)$message){#si el mensaje es un numero

    switch ($message) {
        case 1:
           $respuesta = "Ingrese Su Email";
            break;
        case 2:
           $respuesta = "Muchas Gracias por Utilizar nuestro servicio, Estudia el conocimiento no ocupa lugar Studere.uy";
            break;
        
        default:
            $respuesta = "Bienvenido a Studere.uy Ingrese el numero de la opcion deseada:
                            *1-* Cambiar contraseña   *2-* Salir";
            break;
    }

}else{# sino lo es

    while($user = mysqli_fetch_assoc($cons)){
        $user_list [] = $user['Email'];
    }
    
        if(in_array($message, $user_list)){
            
            $cons = consultarSQL("SELECT * FROM usuario WHERE Email='$message'");
            $user = mysqli_fetch_assoc($cons);
            
            
                $respuesta = "Bienvenido/a: " . $user['Nombre'] . " " . $user['Apellido'] . " Por favor ingrese su contraseña Nueva :";
        }else{
            $respuesta = "Si Ingresó un Email, no se encuentra registrado en nuestra plataforma, si se equivocó, Ingrese su Email Nuevamente. o conteste SI para volver al menu principal";
        
        }

}

$reply = array("reply" => $respuesta);
        echo json_encode($reply);
    
?>