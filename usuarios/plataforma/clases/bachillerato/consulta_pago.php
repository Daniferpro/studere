<?php
include_once "../../../../includes/conectar.php";



function muestra_segun_pago($codigo1, $codigo2){
    $hola=$_SESSION['email'];
    $query="SELECT * FROM usuario WHERE email='$hola' ";
    $consulta=consultarSQL($query);
    $a=mysqli_fetch_assoc($consulta);

    $alumno=$a['Nombre'].$a['Apellido']." ".$a['Email'];

    $query1="SELECT * FROM clases WHERE Alumno='$alumno' ";
    $consulta1=consultarSQL($query1);
    $b=mysqli_fetch_assoc($consulta1);
    
    
        if($b['materia']){
        echo "$codigo1";
        }else{
        echo "$codigo2";
    }
}

function direccion_segun_materia($materia, $dir1, $dir2){
    $hola=$_SESSION['email'];
    $query="SELECT * FROM usuario WHERE email='$hola' ";
    $consulta=consultarSQL($query);
    $a=mysqli_fetch_assoc($consulta);

    $alumno=$a['Nombre'].$a['Apellido']." ".$a['Email'];

    $query3="SELECT * FROM clases WHERE Alumno='$alumno' AND materia='$materia' ";
    $consulta2=consultarSQL($query3);
      
        if($consulta2->num_rows>=1){
         echo $dir1;
        }else{echo $dir2;}

        
    }

?>