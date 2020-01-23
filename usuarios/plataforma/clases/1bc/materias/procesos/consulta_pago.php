<?php
include_once "../../../../../../includes/seguro.php";
include_once "../../../../../../includes/conectar.php";


function muestra_segun_pago($codigo1, $codigo2){
    $hola=$_SESSION['email'];
    $query="SELECT * FROM usuario WHERE email='$hola' ";
    $consulta=consultarSQL($query);
    $a=mysqli_fetch_assoc($consulta);
    
    
        if($a['pago'] == 1){
        echo "$codigo1";
        }else{
        echo "$codigo2";
    }
}

?>