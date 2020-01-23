
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Studere | Registración</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../../"><b>STUDERE.UY</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registro Nuevo</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" required placeholder="Nombre" name="nombre">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control"  required placeholder="Apellido" name="apellido">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" required placeholder="Celular" name="celular">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" required placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" required placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" required placeholder="Repite password" name="password1">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="checkbox"> Acepto los <a href="#">terminos</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registrarme</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      

    <a href="login.php" class="text-center">Ya soy Usuario</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
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
       <script type='text/javascript'>  window.location.replace('./confirmacion_email.php?id=$email&&nombre=$nombre&&celular=$celular') </script>";
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
<!-- mensajes de alerta -->

</body>
</html>
