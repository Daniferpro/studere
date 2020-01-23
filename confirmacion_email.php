<?php 

  require "./procesos/conecciones.php"; //importamos la coneecion a la bd.
  $email = $_GET['id'];                 // email enviado por get
  $nombre = $_GET['nombre'];
  $query = "SELECT * FROM usuario WHERE Email = '$email' AND token != '1' "; // conslta a la bd on el email recivido
  $respuesta = consultarSQL($query); //guardamos la respuesta en una variable.

  //condicionamos las acciones segun el envio del form.
  if(isset($_GET['token'])){


    $consulta = mysqli_fetch_assoc($respuesta); //guardamos en un array asociativo la respuesta de la query a la bd.
    if($consulta['token'] == $_GET['token']){//si los token son iguales proedemos a actualiar permisos para acceso.
      $qry = "UPDATE usuario SET token = '1' WHERE Email = '$email' ";
      $consulta2 = consultarSQL($qry);
      if($consulta2){ header('Location: login.php?email='.$email.'');}

    }else{
      echo "<script> alert('El código ingresado no es Correcto.') </script>";
    }    
  }
  if(isset($_POST['token_email']) && $respuesta ){ //si enviaron el formulario y la query a la bd es OK!.

    $consulta = mysqli_fetch_assoc($respuesta); //guardamos en un array asociativo la respuesta de la query a la bd.
    if($consulta['token'] == $_POST['token_email']){//si los token son iguales proedemos a actualiar permisos para acceso.
      $qry = "UPDATE usuario SET token = '1' WHERE Email = '$email' ";
      $consulta2 = consultarSQL($qry);
      if($consulta2){ header('Location: login.php?email='.$email.'');}

    }else{
      echo "<script> alert('El código ingresado no es Correcto.') </script>";
    }    

  }
 
//  ENVIO DE EMAIL DE CONFIRMACION Y AVISO X SMS DE NUEVO REGISTRO
  $mensaje = file_exists("./email.php");
 
   mail($email, "Activacion de Cuenta Plataforma Studere.uy", $mensaje);
  //mensaje exito ->>
 



?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Studere | Confirmación Usuario</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Validación de Usuario</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Pega el código que te enviamos a <?php print $email;?> para continuar</p>

    <form action="#" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php print $_GET['id']; ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="token_email" placeholder="Código de Verificación" >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
           
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Verificar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

    <a href="#">Olvidé mi contraseña</a><br>
    <a href="register.php" class="text-center">Registrarme!</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
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
if(isset($email)){
  echo '
 <script>

toastr.info("Se ha registrado con éxito en nuestra plataforma, se ha enviado un email de confirmación a tu correo con el código de verificación. Gracias ..", "Mensaje:", {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-bottom-full-width",
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
?>

</body>
</html>
