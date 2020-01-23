<?php

include_once "coneccionbdclases.php";


$email=$_SESSION['email'];
$consulta="SELECT * FROM usuario WHERE Email='$email' ";
$resultado=consultarSQL($consulta);
$resultado1=mysqli_fetch_assoc($resultado);

$alumno=$resultado1['Nombre'].$resultado1['Apellido']." ".$email;
$fecha_hoy= date("Y-m-d"); //fecha de hoy

// obtenemos de la base de datos del alumno las fechas de las clases compradas sean hoy.
$consulta2="SELECT * FROM clases WHERE Alumno='$alumno' AND fecha_fin<='$fecha_hoy'";
$i=consultarSQL($consulta2);

//creamos un contador que reccore la lista de clases vencidas y actualiza su estado.
for($a=1; $i->num_rows>=$a; $a++){
    $resultado2=mysqli_fetch_assoc($i);

$nombre_clase_vencida=$resultado2['Nombre_clase'];
$materia=$resultado2['materia'];

//damos x vencido el curso y restamos 1 alumno a esa clase
if($resultado2['estado'] == "activo"){

    //obtenemos la cantidad de alumnos actuales de esa clase/materia.
    $consulta3="SELECT * FROM $materia WHERE Nombre_clase='$nombre_clase_vencida'";
    $ii=consultar3SQL($consulta3);
    $resultado3=mysqli_fetch_assoc($ii);
    $cantidad_alumnos_actuales=$resultado3['alumnos'];
    $cantidad_alumnos_modificar=$cantidad_alumnos_actuales-1;

    //restamos un alumno a la clase correspondiente en la db de las materias.
    $consulta3_1="UPDATE $materia SET alumnos='$cantidad_alumnos_modificar' WHERE nombre_clase='$nombre_clase_vencida' ";
    consultar3SQL($consulta3_1);

}
    //cambiamos el estado de la calse del alumno si esta activo a vencido
   if($resultado2['estado']=="activo"){
        $consulta4="UPDATE clases SET estado='vencido' WHERE Alumno='$alumno' AND fecha_fin<='$fecha_hoy' ";
        consultarSQL($consulta4);
   }
 }






