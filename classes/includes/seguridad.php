<?php
if(isset($_REQUEST['id'])){ #si existe la variable id enviada por get o post continuamos creando la session del usuario
    session_start();
    $id = $_REQUEST['id'];
    
    include_once 'usuarios_objeto.php';                  # incluimos la conf de objeto user
   
    $User = new Usuario($id);     
    $_SESSION['email'] = $User->email;                       # se crea el objeto con ese id unico
    setcookie('id', $User->identificador, time() + 3600);# seteamos la cookie id con el id del usuario y le sumamos una hora mas de validez

    # en el caso de que el usuario este mas de una hora sin actividad la cookie vence, y el usuario entra dentro del if de linea 3
}else{  #si no existe verificamos la existencia de la cookie con su id  y la variable de sesion con su email si no existe va al host

    session_start();

    if(!isset($_COOKIE['id']) || !isset($_SESSION['email'])){# si no existe la cookie id o la variable de session email 
        session_destroy();                                   # se destruye la sessionn
        $_SESSION = array();                                 # se vacia la variable session que contiene un array, ahora vacio
        header("Location: https://studere.uy?mensaje");                  # se redirige al usuario a la pagina principañ
    }else{
        $id = $_COOKIE['id'];                                # en el caso de que exista se le asigna a una variable de nombre id
    
        include_once 'usuarios_objeto.php';                  # incluimos la conf de objeto user
    
        $User = new Usuario($id);                            # se crea el objeto con ese id unico
        setcookie('id', $User->identificador, time() + 3600);# seteamos la cookie id con el id del usuario y le sumamos una hora mas de validez

        # en el caso de que el usuario este mas de una hora sin actividad la cookie vence, y el usuario entra dentro del if de linea 3
    }
}

?>