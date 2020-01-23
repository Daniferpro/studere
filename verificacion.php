<!DOCTYPE html>

<html lang="en">
<head>
	<title>Verifica Tu Email</title>
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
<!-- =====FIREBASE UI GOOGLE SMS AUTENTIFICACION ==================================================-->

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
						Verifica tu Email Para continuar
					</span><form action="" > 
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Codigo requerido">
						<input class="input100" type="text" name="codigo" placeholder="Codigo">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					<div class="container-login100-form-btn p-t-10">
						<input class="login100-form-btn" action="" type="submit" value="Validar">
							
						
									</form>
								
					
                                            <?php
                                            if($_POST['codigo']==$codigo1){
                                                header("Location: ./registrarse.php");
                                            }else{
                                                echo "<script language='JavaScript'> alert ('Codigo Incorrecto Incorrecto'); </script>";
                                                require "./includes/enviaremail.php";

                                            }
                                            ?>
						
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
                            Tus Datos son Privados y son tratados como tal;<br>
                            La confirmación x Numero es necesaria para verificar la veracidad de tus datos. <br>
                            Gracias!
						</a> <br> <br>
						<a class="txt1" href="./registrarse.php">
							Resgistrarse!
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>

					<div class="text-center w-full">
					<a class="txt1">
							--Plataforma es una creacion de DanielFerreira--<i class="fa fa-long-arrow-right"></i>  Tacuarembó-Uruguay-2019
					</a><i class="fa fa-long-arrow-left"> </i>
						
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