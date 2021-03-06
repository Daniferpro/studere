<?php
ob_start();



?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Plataforma</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--===============================================================================================-->
</head>
<body>
<script type="text/javascript">(function(){var ldk=document.createElement('script'); ldk.type='text/javascript'; ldk.async=true; ldk.src='https://s.cliengo.com/weboptimizer/5cfb0d68e4b003abf5067580/5cfb0d69e4b003abf5067583.js'; var s=document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s);})();</script>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/images/fondo.jpg');">
			<div class="wrap-login100 p-t-50 p-b-60">
				<form class="login100-form validate-form" action="" method="post">
					<div class="">
						<img src="images/images/logo4.png" width="100%"   alt="logo">
					</div>

					<form action="" > 
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Usuario requerido">
						<input class="input100" type="Email" name="email" placeholder="<?php  if(isset($_GET['email'])){echo $_GET['email'];}else{ echo "Ingrese Email";}?>" value="<?php if(isset($_COOKIE['user'])){echo $_COOKIE['user'];} if(isset($_GET['email'])){echo $_GET['email'];}?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password requerido">
						<input class="input100" type="password" name="contraseña" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					
					<?php 
					if(isset($_POST['url_redirect'])){
						$url_vieja = $_POST['url_redirect'];
						echo '<input type="hidden" value="'.$url_vieja.'" name="redirectto">';
					}
					?>
					<div class="container-login100-form-btn p-t-10">
						<input class="login100-form-btn" action="" type="submit" value="Acceder">
					</div>	
						
									</form>
									
					<form action="./usuarios/plataforma/estudiando/register.php" method="get">		
					<div class="container-login100-form-btn p-t-10">		
						<input class="login100-form-btn" type="submit" value="Registarse">
						</div>	
					</form>
				
					
											
						<?php 
							if(isset($_POST['email']) && isset($_POST['contraseña'])){
			
								require_once "./includes/conectar.php";
								require_once "./includes/login.php";
								
							ob_end_flush();
													}						
							?>
							
					<div class="text-center w-full p-t-25 p-b-230">
					
					<?php 
					#Si viene la variable redirect dar la opcion  de continuar anonimamente.
					if(isset($_POST['url_redirect'])){
						echo '<a class="txt1" href="#" data-toggle="modal" data-target="#exampleModalCenter">
						Continuar sin registrarme
												
					</a>';
					}else {
						#sino, lo muestra normal.
echo '<a class="txt1" href="./index.php">
Volver al Inicio
<i class="fa fa-long-arrow-right"></i>						
</a>';
					}
					?>

					
					</div>
					</div>


					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	

<?php if(isset($_POST['url_redirect'])): ?>
<form action="./usuarios/plataforma/clases/bachillerato/registra_fatc_nlo.php?<?php echo $_POST['url_redirect'] ?>&id=<?php echo $_POST['nombre_clase']; ?>" method="post">
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Continuar sin registrarse</h5>
        
      </div>
      <div class="modal-body">
        <a class="font-weight-light text-muted text-lg">Para continuar sin registrarte, por favor, ingresa tu correo electronico.<br>Ten en cuenta que, este es el medio de contacto que tenemos
	para continuar el proceso de compra del curso.	
	</a><br><br>
		<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
  <input type="email" class="form-control" placeholder="Correo electronico..." name="email_annon" required aria-label="Username" aria-describedby="basic-addon1">
</div>
	  </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info">Continuar</button>
      </div>
    </div>
  </div>
</div>						
	</form>
	<?php endif; ?>
</body>
</html>