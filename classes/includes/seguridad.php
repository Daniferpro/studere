<?php
########################################################################################################
########################################################################################################
###########                                                                                #############
###########   SETEO DE COOKIES PARA USUARIO Y VERIFICACION DE LA EXISTENCIA DE LA SESION   #############
###########                                                                                #############
########################################################################################################
########################################################################################################
if(isset($_POST['id'])){
    if(!empty($_POST['id'])){

        $id = $_POST['id'];
        include_once 'usuarios_objeto.php';                 
        $User = new Usuario($id); 
        if(!isset($_SESSION)){        
            session_start();
        }
        $_SESSION['id'] = $User->identificador;
        $_SESSION['email'] = $User->email;
        $_SESSION['materia'] = $User->materia;
        setcookie('id', $User->identificador,  time() + 3600, '/'); # agregamos una hora mas para la cookie id

    }
}
// if(isset($_COOKIE['id'])){
//     if(!empty($_COOKIE['id'])){
//         if(!isset($_SESSION)){
//             session_start();
//             if(!isset($_SESSION['id'])){
//                 session_destroy();
//             }
//         }
//     }
// }
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_COOKIE['id']) || !isset($_SESSION['id'])){ # si no existe la cookie id o la variable de session id
    if(isset($_SESSION)){
        $_SESSION = array();          
        session_destroy();
    }         
    
    if(isset($_COOKIE['id'])){
        setcookie('status', '',  time() - 3600, '/');
        setcookie('id', '',  time() - 3600, '/');
    }
                        
}

if(isset($_COOKIE['id']) && isset($_SESSION['id'])){
    if($_COOKIE['id'] == $_SESSION['id']){
        
        $id = $_SESSION['id'];
        include_once 'usuarios_objeto.php';                 
        $User = new Usuario($id); 
        setcookie('id', $User->identificador,  time() +3600, '/'); # agregamos una hora mas para la cookie id
    }
}

?>