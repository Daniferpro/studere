<?php
session_start();
if(!isset($_COOKIE['id']) || !isset($_SESSION['email'])){# si no existe la cookie id o la variable de session email 
    session_destroy();                                   # se destruye la sessionn
    $_SESSION = array();                                 # se vacia la variable session que contiene un array, ahora vacio
    header("Location: ../../?mensaje");                  # se redirige al usuario a la pagina principañ
}else{
    $id = $_COOKIE['id'];                                # en el caso de que exista se le asigna a una variable de nombre id
 
    include_once 'usuarios_objeto.php';                  # incluimos la conf de objeto user
   
    $User = new Usuario($id);                            # se crea el objeto con ese id unico
    setcookie('id', $User->identificador, time() + 3600);# seteamos la cookie id con el id del usuario y le sumamos una hora mas de validez

    # en el caso de que el usuario este mas de una hora sin actividad la cookie vence, y el usuario entra dentro del if de linea 3
}
?>