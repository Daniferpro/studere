
<?php
//si enviaron el formulario y acepataron los terminos y condiciones ejecutamos la consulta a la bd.
if(isset($_POST['checkbox']) && $_POST['checkbox'] == "on"){
  ###### Requerimos el archivo api_wpp.php que contiene la funcion de enviar whatsapp ######

  include_once "../../../includes/api_wpp.php"; #la funcion es: sendMensajeCurl($to, $msg);
  

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $celular = $_POST['celular'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password1 = $_POST['confirm-password'];
  $pass_encrip = hash("sha512", $password);
  $token2=random_int(100000,999999);//token para enviar por email para confirmacion de usuario..
  ##### variables para el envio de wpp #####
  
  $celular_wpp = strval($_POST['celular']);
  $celular_wpp = substr($celular_wpp,-8);
  $numero_destino = "598" . $celular_wpp;
  $mensaje = "Hola *".$nombre." ".$apellido."* - Gracias por Registrarte en *studere.uy*, este es el Codigo de verificacion: *".$token2."*";

  #ahora llamamos la funcion send Mensaje curl con los datos anteriores $numero_destino & $mensaje
  if($_POST['wpp'] == "on"){
    if(sendMensajeCurl($numero_destino, $mensaje)){
      $msg_usr = "SE HA ENVIADO EL MENSAJE CON ÉXITO al número :".$_POST['celular'];
    }else{
      $msg_usr = "Upss!!! <br> No se ha podido enviar el Whatsapp con el Código";
    }
  }
    //comprobamos si las passwords ingresadas son iguales
    
    //Comprobamos si el email o numero de telefono ya existe en la bd.
    require "./procesos/conecciones.php";
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
       <script type='text/javascript'>  window.location.replace('./confirmacion_email.php?id=$email&&nombre=$nombre&&celular=$celular&msg_usr=$msg_usr') </script>";
        // require_once "./procesos/sms/aviso.php";
       
       
      
      if($pregunta_email->num_rows>= 1 || $pregunta_celular->num_rows>=1){
     
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
  }
  
}elseif(isset($_POST['checkbox']) && $_POST['checkbox'] == "off"){
  //si el usuario no acepta los términos mostar mensaje de alerta y negar la inscricion.
  //mensaje de alerta->>
}
?>