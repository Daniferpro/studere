<?php
session_start();
include_once "conecciones.php";
$email=$_SESSION['email'];
$consultamos="UPDATE usuario SET estado='offline' WHERE Email='$email'";

consultarSQL($consultamos);

if(isset($_GET['tk']) && isset($_SESSION['token']) && $_GET['tk']==$_SESSION['token'] ){

    if(isset($_COOKIE['status'])){
        if($_COOKIE['status'] == 'online'){
      setcookie('status', 'offline', time() + 365 * 24 * 60 * 60);
        }
    }

    session_destroy();

    header("Location: ../login.php");


}


?>