<?php
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
    include_once "procesos/conecciones.php";
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
       <script type='text/javascript'>  window.location.replace('../../../../../usuarios/plataforma/estudiando/confirmacion_email.php?id=$email&&nombre=$nombre&&celular=$celular') </script>";
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
?>