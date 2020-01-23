<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$celular = $_POST['celular'];
$new_email = $_POST['email'];
$password = base64_encode($_POST['password']);
$estado = $_POST['estado'];
$tipo = $_POST['tipo'];



$pregunta_email = consultarSQL("SELECT Email FROM usuario WHERE Email='$new_email'");
$pregunta_celular = consultarSQL("SELECT Celular FROM usuario WHERE Celular='$celular'");

    //si el celular y el email no existen en la bd guardamos el usuario nuevo en la bd.
if($pregunta_email->num_rows == 0 && $pregunta_celular->num_rows == 0){ 
    $nuevo_registro = "INSERT INTO `usuario` (`id`, `Nombre`, `Apellido`, `Celular`, `Contraseña`, `Email`, `estado`, `materias`, `token`, `pago`) 
                        VALUES (NULL, '$nombre', '$apellido', '$celular', '$password', '$new_email', 'offline', '$tipo', '1', '0')";
    consultarSQL($nuevo_registro);

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
    
    toastr.error("Mensaje : :  ' . $dato . ' ' . ' ya esta registrado en la plataforma, Intenta nuevamente", "ALERTA:", {
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

