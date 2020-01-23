<?php
require_once "./conectar.php";
$usuario=$_POST['email'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];   
$celular=$_POST['celular'];
$pass=base64_encode($_POST['contraseña']);
$pass2=base64_encode($_POST['contraseña2']);
$tipo=$_POST['tipo'];
$token2=$_POST['token2'];
$mensaje="Hola $nombre Gracias Por Registrarte en Nuestra Plataforma para acceder copia y pega éste codigo $token2 en la casilla CODIGO DE VERIFICACION para finalizar!!!";
$query="INSERT INTO usuario (Email, Nombre, Apellido, Celular, Contraseña, Token, materias, pago, estado)
        VALUES ('$usuario', '$nombre', '$apellido', '$celular', '$pass', '$token2', '', '0', 'offline')";

if(consultarSQL($query)){

        header("Location: ../index1.php?id=$usuario");
        require_once "./sms/aviso.php";
        mail($usuario, "Activacion de Cuenta Plataforma", $mensaje);
       
}else{
    echo "Ocurrio un Error";

}











?>