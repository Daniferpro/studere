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
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="" method="post">
					<div class="login100-form-avatar">
						<img src="images/descarga.jfif	" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Activacíon de Cuenta <br> <br> <ul class='txt1 text-center'></ul>
						
					</span>
											
						<form action="" > 
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Usuario requerido">
						<input class="input100" type="Email" name="email" placeholder="Email">
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
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Ingresa el Codigo">
						<input class="input100" type="password" name="token2" placeholder="codigo de verificacion" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					<div class="container-login100-form-btn p-t-10">
						<input class="login100-form-btn" action="" type="submit" value="Acceder">
							
						
									</form>
								
					
											
						<?php 
							if(isset($_POST['email']) && isset($_POST['contraseña']) && isset($_POST['token2'])){

								require_once "./includes/conectar.php";
								require_once "./includes/login1.php";
								$up2="UPDATE usuario SET Token='1' WHERE Email='$_POST[email]'" ;
								consultarSQL($up2);
							ob_end_flush();
													}						
							?>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="./index.php" class="txt1">
							Volver al Inicio
						</a> <br> <br>
						<a class="txt1" href="./registrarse.php">
							Resgistrarse!
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>

					<div class="text-center w-full">
					<a class="txt1">
							--Plataforma es una creacion de DanielFerreira--<i class="fa fa-long-arrow-right"></i>  Tacuarembó-Uruguay-2019
					</a><i class="fa fa-long-arrow-left"></i>
					<br><a  href="documents/privacidad.php" class="txt1">
                        Política de Privacidad
                    </a>
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

</body>
</html>