<?php
include_once "../../includes/seguro.php";
include_once "../../includes/conectar.php";
$hola=$_SESSION['email'];
$query="SELECT * FROM usuario WHERE email='$hola' ";
$consulta=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta);
//actualizar datos en base de datos 


if(isset($_POST['nombre']) && isset($_POST['apellido'])){
 
$nombreNuevo=$_POST['nombre'];
$apellidoNuevo=$_POST['apellido'];
$celularNuevo=$_POST['celular'];
$passNueva1=md5($_POST['contraseña1']);
$passNueva2=md5($_POST['contraseña2']);

    if($passNueva1!="" && $passNueva2!=""){
        if($passNueva1 != $passNueva2){
            echo "<script language='JavaScript'> alert ('Las contraseñas No Coinciden '); </script>";
            }else{
            $up1="UPDATE usuario SET Nombre='$nombreNuevo', Apellido='$apellidoNuevo', celular='$celularNuevo', Contraseña='$passNueva1' WHERE Email='$hola'" ;
			consultarSQL($up1);
			echo "<script language='JavaScript'> alert ('Los Datos han sido Cambiados Exitosamente! '); </script>";
        }

    }


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">

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
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">  
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Bienvenido : <?php  echo $_SESSION['email']; ?> </div></li>
									
									
								</ul>
								
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>
<!-- Incluimos la barra de navegación configurada individualmente desde un .php -->
<?php include_once "./includes/barranav.php" ; ?>
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">Inicio</a></li>
								<li>Editar Perfil</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Blog -->

	<div class="blog">
	<form class="login100-form validate-form" action="perfil.php" method="post">
					<div class="login100-form-avatar">
						<img src="images/images/descarga.jfif" alt="AVATAR">
					</div>

					
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Nombre requerido">
						<input class="input100" type="text" name="nombre" placeholder=<?php echo $a['Nombre']; ?>>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Apellido requerido">
						<input class="input100" type="text" name="apellido" placeholder=<?php echo $a['Apellido']; ?>>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Celular requerido">
						<input class="input100" type="int" name="celular" placeholder=<?php echo $a['Celular']; ?> >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" >
						<input class="input100" type="password" name="contraseña1" placeholder="Password Nueva">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					
					</div>
					<div class="wrap-input100 validate-input m-b-10" >
						<input class="input100" type="password" name="contraseña2" placeholder="Repita Password Nueva">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					
					</div>
					
					<div class="container-login100-form-btn p-t-10">
						<input class="login100-form-btn" action="./index.php" type="submit" value="Cambiar Datos">
							
						
									</form>
					</div>


	<!-- Newsletter -->

	<br>
		<br>	
	<!-- Footer -->

	<footer class="footer">
		<!-- incluimos archivo de llamado a Footer desde un .php individual -->
	<?php include_once "./includes/footer.php" ;?>

	</footer>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/masonry/masonry.js"></script>
<script src="plugins/video-js/video.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/blog.js"></script>
</body>
</html>