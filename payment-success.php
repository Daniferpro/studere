<?php
if(empty($_GET['aprobado']) && empty($_GET['reference'])){
    header ("Location: /index.php");
    
}else{
    include_once 'usuarios/plataforma/clases/bachillerato/conn/conn.php';
    include_once 'usuarios/plataforma/includes/coneccionbdclases.php';
    include_once "profe/includes/conecciones.php";

    $servername = "localhost";
$username = "root";
  $password = "";
  $dbname = "parapruebas";

$conn = new mysqli($servername, $username, $password, $dbname);
  if($conn->connect_error){
    die("Conexión fallida: ".$conn->connect_error);
  }
  $materia = $_GET['materia'];
  $status = $_GET['aprobado'];
  $ref = $_GET['reference'];

  $verificar_existencia = "SELECT * FROM fatura WHERE ref='$ref'";
  $resultado = $conn->query($verificar_existencia);
   
  $final = mysqli_num_rows($resultado);
  
    if($final == 0){
        header ("Location: index.php");
    }else {
        $datos = mysqli_fetch_assoc($resultado);
        if(isset($_GET['payment_type'])){$payment_type=$_GET['payment_type'];}else{$payment_type=$_REQUEST['payment_status_detail'];}
       if(isset($_GET['collection_id'])){$comprobante=$_GET['collection_id'];}else{$comprobante=$_REQUEST['payment_id'];}

       $queryy="SELECT * FROM fatura WHERE id_user='$datos[id_user]' AND ref='$_REQUEST[external_reference]'";
$conss=consultarSQL($queryy);
$info_fact=mysqli_fetch_assoc($conss);

$clase = $info_fact['id_clase'];

        $f_new="UPDATE fatura SET status='aprovado', forma='$payment_type', comprobante='$comprobante', identificador_compra='$_REQUEST[merchant_order_id]' WHERE ref='$ref'";
        $act_fact = $conn->query($f_new);

        

                $query3="SELECT * FROM $materia WHERE id='$clase'";
                $consulta1= gruposSQL($query3);
                $clases_2 = mysqli_fetch_assoc($consulta1);
                $año_clase = $clases_2['nivel'];
                
                $query4 = "SELECT * FROM usuario WHERE materias='$materia'";
                $query4 = consultarSQL($query4);
                $profe_datos = mysqli_fetch_assoc($query4);
                $profe_id = $profe_datos['id'];
                

               


                $clasenueva=$clases_2['Nombre'];
                $profesor=$profe_id;
                $año=$año_clase;
                $fecha_inicio= date("Y-m-d");
                $fecha_fin = strtotime ( '+40 day' , strtotime ( $fecha_inicio ) ) ;
                $fecha_fin = date ( 'Y-m-j' , $fecha_fin );
                $alumno = $datos['id_user'];
                $materia_nueva=$materia;    
                $permisonuevo="INSERT INTO clases (Nombre_clase, Profesor, Año, fecha_inicio, fecha_fin, Alumno, materia, estado, ref, id_clase)
                VALUES ('$clasenueva', '$profesor', '$año', '$fecha_inicio', '$fecha_fin', '$alumno', '$materia_nueva', 'activo', '$clases_2[id]', '$clase')";
                $update2 = consultarSQL($permisonuevo);
                        if($update2){
                            include_once 'usuarios/plataforma/estudiando/register-include.php';
//si enviaron el formulario y acepataron los terminos y condiciones ejecutamos la consulta a la bd.
if(isset($_POST['checkbox']) && $_POST['checkbox'] == "on"){

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $celular = $_POST['celular'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password1 = $_POST['password1'];
  $pass_encrip = base64_encode($password);
  $token2=base64_encode(uniqid(mt_rand(), true));//token para enviar por email para confirmacion de usuario..

    //comprobamos si las passwords ingresadas son iguales
    if($password != $password1){
      //mostrar mensaje (las passwords no coinciden).
      
      echo "<script> alert('Alerta: Los Passwords no Coinciden');</script>";
      
    }else{
    //Comprobamos si el email o numero de telefono ya existe en la bd.
    require "usuarios/plataforma/estudiando/procesos/conecciones.php";
    $pregunta_email = consultarSQL("SELECT Email FROM usuario WHERE Email='$email'");
    $pregunta_celular = consultarSQL("SELECT Celular FROM usuario WHERE Celular='$celular'");

    //si el celular y el email no existen en la bd guardamos el usuario nuevo en la bd.
    if($pregunta_celular->num_rows < 1 && $pregunta_email->num_rows < 1){ 

      $qry = "INSERT INTO usuario (Email, Nombre, Apellido, Celular, Contraseña, Token, materias, pago, estado) 
              VALUES ('$email', '$nombre', '$apellido', '$celular', '$pass_encrip', '$token2', '', '', 'offline' )";
      consultarSQL($qry);
        //si se guardaron exitosamente los datos mostrar mensaje de EXITO avisar de envio de email de confirmación.
      if($qry){ 
        echo "
       <script type='text/javascript'>  window.location.replace('usuarios/plataforma/estudiando/confirmacion_email.php?id=$email&&nombre=$nombre&&celular=$celular') </script>";
        // require_once "./procesos/sms/aviso.php";
       
       
      }
    }elseif($pregunta_email->num_rows>= 1 || $pregunta_celular->num_rows>=1){
     
      if($pregunta_email){ $dato_email = mysqli_fetch_assoc($pregunta_email);}else{$dato_email['Email'] = " ";}
      if($pregunta_celular){$dato_celular = mysqli_fetch_assoc($pregunta_celular);}else{$dato_celular['Celular'] = " ";}
      $dato = $dato_celular['Celular']. " " . $dato_email['Email'];
      //si el email o el celular existe en la bd avisamos x mensaje en pantalla al usuario.
      //mensaje de alerta (el email o celular ingresado ya está registrado)->>
        echo '
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
       src="https://code.jquery.com/jquery-3.4.1.min.js"
       integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
       crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
         
       <script type="text/javascript">
      
      toastr.error("Mensaje : :  El' . ' ' . $dato . ' ' . ' ya esta registrado en la plataforma, Intenta nuevamente", "ALERTA:", {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "15000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      });
      
      </script>
      ';
      
      
    }
  }
}elseif(isset($_POST['checkbox']) && $_POST['checkbox'] == "off"){
  //si el usuario no acepta los términos mostar mensaje de alerta y negar la inscricion.
  //mensaje de alerta->>
}
                        }
            
    }

    
}

?>