<?php
include_once "conecciones.php";
include_once "usuarios_objeto.php";
$id = $_SESSION['id'];
$User = new Usuario($id);

  setcookie('status', '',  time() - 3600, '/');
  setcookie('id', '',  time() - 3600, '/');
   
$_SESSION = array(); 

$User->actualizar('estado', 'offline');
session_destroy();

header("Location: https://studere.uy/logout.php")


?>