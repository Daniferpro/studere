<?php
require_once "./includes/conectar.php";
$query="INSERT INTO usuario(Email, Nombre, Apellido, Celular, Contraseña, token, materias, pago)) 
				VALUES ('email', 'nombre', 'apellido', 'celular', 'contraseña', 'token2', '[]', '0' )";
consultarSQL($query);
$codigo=md5(uniqid(mt_rand(), true));
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
		<div class="container-login100" style="background-image: url('images/images/fondo.jpg');">
			<div class="wrap-login100 p-t-20 p-b-30">
				<form class="login100-form validate-form" action="./includes/guardardatos.php" method="post">
					<div class="">
						<img src="images/images/logo4.png" width="100%"  alt="AVATAR">
					</div>

					<form action="" > 
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Usuario requerido">
						<input class="input100" type="Email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Nombre requerido">
						<input class="input100" type="text" name="nombre" placeholder="Nombre">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Apellido requerido">
						<input class="input100" type="text" name="apellido" placeholder="Apellido">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Celular requerido">
						<input class="input100" type="number" name="celular" placeholder="Celular" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password requerido">
						<input class="input100" type="password" id="pass1" name="contraseña" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
						

					</div>

					




					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password requerido">
						<input class="input100" type="password" id="pass2" name="contraseña2" onKeyUp="habilitar()" placeholder="Repite la contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
						

					</div>
					

								
<div class="wrap-input100 validate-input m-b-10" hidden>
<select  class="input100" name="token2" id="token2">
							  <option value="<?php echo $codigo;?>"><?php echo $codigo;?></option>
																</select>
						

					</div>
					<div class="container-login100-form-btn p-t-10">
						 <input class="login100-form-btn" action="./index.php" type="submit" value="Resgistrarse">
							
						
									</form>
							
									
								
					
											
				
					</div><br>
					<div class="container-login100-form-btn p-t-10">
						<a href="index.php"><input class="login100-form-btn" id="boton"  type="submit" value="Volver al Inicio"></a>

					

					
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">

function habilitar()

{

	var camp1= document.getElementById('pass1');
	var camp2= document.getElementById('pass2');
	var boton= document.getElementById('boton');

	if (camp1.value != camp2.value) {

		alert("las contraseñas no coinciden")
	}
}



</script>
	
	

	
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