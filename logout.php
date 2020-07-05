<?php
include_once "includes/conectar.php";
include_once "./admin/includes/usuarios_objeto.php";
$id = $_COOKIE['id'];
$User = new Usuario($id);
if(isset($_COOKIE['status'])){
  setcookie('status', '',  time() - 3600, '/');
}    
$_SESSION = array(); 
$User->actualizar('estado', 'offline');
session_destroy();

header("Location: ../")


?>