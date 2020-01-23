<?php
include_once "conecciones.php";
include_once "seguro_usuarios.php";


$consulta00="SELECT * FROM usuario WHERE estado='online'";
$resultado00=consultarSQL($consulta00);

if($resultado00){

 echo $resultado00->num_rows+46;

}

