<?php
include_once "../../includes/conectar.php";

if(!isset($_SESSION)){ 
    session_start(); 
}  
$hola=$_SESSION['email'];

$query="SELECT * FROM usuario WHERE email='$hola' ";
$consulta=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta);
$nombre=$a['Nombre'].$a['Apellido'];
$servidor = "localhost";
$usuario= "root";
$password = "";
$base_datos = "chatusuarios";



$conexion = new mysqli($servidor, $usuario, $password, $base_datos);

$chat="CREATE TABLE IF NOT EXISTS $nombre(id int(11) NOT NULL auto_increment,
                                  Nombre varchar(30)NOT NULL, mensaje text(1000)NOT NULL,
								  materia varchar(30)NOT NULL,
								  fecha TIMESTAMP NOT NULL,
                                  PRIMARY KEY(id) )";
								$conexion->query($chat);
// $cambio="RENAME TABLE chat TO [$hola]";
// $conexion->query($cambio);



function formatearFecha($fecha){
	return date('g:i a', strtotime($fecha));
}


?>