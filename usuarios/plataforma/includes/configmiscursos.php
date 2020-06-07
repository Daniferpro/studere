<?php
include_once "../../includes/seguro.php";
include_once "../../includes/conectar.php";

$hola=$_SESSION['email'];
$query="SELECT * FROM usuario WHERE email='$hola' ";
$consulta=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta);
$alumno=$a['id'];

$query="SELECT * FROM clases WHERE Alumno='$alumno'";
$consulta2=consultarSQL($query);

$query1="SELECT * FROM clases WHERE Alumno='$alumno' ORDER BY id DESC LIMIT 8";
$consulta0=consultarSQL($query1);

$query1="SELECT * FROM clases WHERE Alumno='$alumno' ORDER BY id DESC LIMIT 8";
$consulta01=consultarSQL($query1);
$assoc=mysqli_fetch_assoc($consulta01);





?>