<?php
require_once '../conn/conn.php';
include_once "../../../../../includes/seguro.php";
include_once "../../../../../includes/conectar.php";
include_once "../../../includes/coneccionbdclases.php";





$hola=$_SESSION['email'];
$query="SELECT * FROM usuario WHERE email='$hola' ";
$consulta=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta);
$alumno = $a['Nombre'].$a['Apellido']." ".$a['Email'];


// consultas

$queryy="SELECT * FROM fatura WHERE id_user='$a[id]' AND status='Pendiente' AND ref='$_GET[external_reference]'";
$conss=consultarSQL($queryy);
$info_fact=mysqli_fetch_assoc($conss);

$id=$info_fact['ref'];
$clase = $info_fact['producto'];
$materia = $info_fact['materia'];

$query2="SELECT * FROM clases WHERE Alumno='$a[id]' AND Nombre_clase='$clase'";
$consulta3=consultarSQL($query2);
$b=mysqli_fetch_assoc($consulta3);


$query3="SELECT * FROM $materia WHERE nombre_clase='$clase'";
$consulta1=consultar3SQL($query3);
$clases = mysqli_fetch_assoc($consulta1);

if($b['estado'] == "activo"){ echo "<script>location.href='../../../miscursos.php';</script>";}  //si la clase esta activa sale de esta configuracion.


// Condicionales para creacion o actualización de las clases en la DB

if($consulta3->num_rows>=1){
    if($b['estado'] == "vencido"){  // si la clase esta vencida y hay pago y respuesta valida de MP la actualizamos

    if(isset($_GET['aprovado'])){$estado_recivido = $_GET['collection_status'];} //guardamos el estado de la compra 

        if(isset($_GET['collection_status']) && $estado_recivido="approved"){ //comparamos el estado de la compra si esta aprovado el pago actualizamos la clase
          
           $clasenueva=$clase;
           $profesor=$clases['profesor'];
           $año="4°to año bd";
           $fecha_inicio= date("Y-m-d");
           $fecha_fin = strtotime ( '+60 day' , strtotime ( $fecha_inicio ) ) ;
           $fecha_fin = date ( 'Y-m-j' , $fecha_fin );
           $alumno = $a['id'];
           $materia_nueva=$materia;    

           $borrar="DELETE FROM clases WHERE id='$_GET[id2]'";
           consultarSQL($borrar);    
           $permisonuevo="INSERT INTO clases (Nombre_clase, Profesor, Año, fecha_inicio, fecha_fin, Alumno, materia, estado, ref)
           VALUES ('$clasenueva', '$profesor', '$año', '$fecha_inicio', '$fecha_fin', '$alumno', '$materia_nueva', 'activo', '$id')";
           consultarSQL($permisonuevo);
           
           echo "<script>location.href='../../../miscursos.php';</script>";


      }
    }
  }


  if($consulta3->num_rows==0){ // si no esxiste la clase la creamos en la BD clases con los datos correspondientes y si hay respuesa valida de mp
  
    if(isset($_GET['aprovado'])){$estado_recivido=$_GET['collection_status'];} //guardamos el estado de la compra 

    if(isset($_GET['aprovado']) && $estado_recivido="approved"){ //comparamos el estado de la compra si esta aprovado el pago creamos la clase
      
       $clasenueva=$clase;
       $profesor=$clases['profesor'];
       $año="4°to año bd";
       $fecha_inicio= date("Y-m-d");
       $fecha_fin = strtotime ( '+30 day' , strtotime ( $fecha_inicio ) ) ;
       $fecha_fin = date ( 'Y-m-j' , $fecha_fin );
       $alumno = $a['id'];
       $materia_nueva=$materia;

       $permisonuevo="INSERT INTO clases (Nombre_clase, Profesor, Año, fecha_inicio, fecha_fin, Alumno, materia, estado, ref)
       VALUES ('$clasenueva', '$profesor', '$año', '$fecha_inicio', '$fecha_fin', '$alumno', '$materia_nueva', 'activo', '$id')";
       consultarSQL($permisonuevo);

       $pago_nuevo="UPDATE usuario SET pago='1' WHERE Email='$hola'";
       consultarSQL($pago_nuevo);

       //obtenemos la cantidad de alumnos actuales de esa clase/materia y sumamamos 1.
       $consulta3="SELECT * FROM $materia WHERE Nombre_clase='$clase'";
       $ii=consultar3SQL($consulta3);
       $resultado3=mysqli_fetch_assoc($ii);
       $cantidad_alumnos_actuales=$resultado3['alumnos'];
       $cantidad_alumnos_modificar=$cantidad_alumnos_actuales+1;
       //sumamos un alumno.
       $consulta3_1="UPDATE $materia SET alumnos='$cantidad_alumnos_modificar' WHERE nombre_clase='$clase' ";
       consultar3SQL($consulta3_1);
       $payment_type=$_GET['payment_type'];
       $f_new="UPDATE fatura SET status='aprovado', forma='$payment_type', comprobante='$_GET[collection_id]', identificador_compra='$_GET[merchant_order_id]' WHERE ref= '$id'";
       $factura_nueva=consultarSQL($f_new);



       echo "<script>location.href='../../../miscursos.php';</script>";

    }
   }
  

   if(isset($_GET['pendiente'])){

    
    $clasenueva=$clase;
    $profesor=$clases['profesor'];
    $año="4°to año bd";
    $fecha_inicio= date("Y-m-d");
    $fecha_fin = strtotime ( '+30 day' , strtotime ( $fecha_inicio ) ) ;
    $fecha_fin = date ( 'Y-m-j' , $fecha_fin );
    $alumno = $a['id'];
    $materia_nueva=$materia;

    $permisonuevo="INSERT INTO clases (Nombre_clase, Profesor, Año, fecha_inicio, fecha_fin, Alumno, materia, estado, ref)
    VALUES ('$clasenueva', '$profesor', '$año', '$fecha_inicio', '$fecha_fin', '$alumno', '$materia_nueva', 'Pendiente', '$id')";
    consultarSQL($permisonuevo);

    $pago_nuevo="UPDATE usuario SET pago='1' WHERE Email='$hola'";
    consultarSQL($pago_nuevo);

    //obtenemos la cantidad de alumnos actuales de esa clase/materia y sumamamos 1.
    $consulta3="SELECT * FROM $materia WHERE Nombre_clase='$clase'";
    $ii=consultar3SQL($consulta3);
    $resultado3=mysqli_fetch_assoc($ii);
    $cantidad_alumnos_actuales=$resultado3['alumnos'];
    $cantidad_alumnos_modificar=$cantidad_alumnos_actuales+1;
    //sumamos un alumno.
    $consulta3_1="UPDATE $materia SET alumnos='$cantidad_alumnos_modificar' WHERE nombre_clase='$clase' ";
    consultar3SQL($consulta3_1);
    $payment_type=$_GET['payment_type'];
    $f_new="UPDATE fatura SET status='Pendiente', forma='$payment_type', comprobante='$_GET[collection_id]', identificador_compra='$_GET[merchant_order_id]' WHERE ref= '$id'";
    $factura_nueva=consultarSQL($f_new);



    echo "<script>location.href='../../../miscursos.php';</script>";


   }
   
   if(isset($_GET['fallo'])){
    
    $f_new="UPDATE fatura SET status='Fallo', forma='No completo Pago', comprobante='$_GET[collection_id]', identificador_compra='$_GET[merchant_order_id]' WHERE ref= '$id'";
    $factura_nueva=consultarSQL($f_new);
    echo "<script>location.href='../../../miscursos.php?fallo';</script>";
   }

  







?>