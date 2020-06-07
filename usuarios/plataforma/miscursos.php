<?php
require __DIR__  . '../../../vendor/autoload.php';
include_once "../../includes/seguro.php";
include_once "../../includes/conectar.php";
$hola=$_SESSION['email'];
$query="SELECT * FROM usuario WHERE email='$hola' ";
$consulta=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta);
include_once "includes/configmiscursos.php";
$alumno=$a['Nombre'].$a['Apellido']." ".$hola;

if(isset($_GET['fallo'])){
	echo "<script>alert('Lo sentimos, Tu compra no se ha completado.');</script>";	  
}
if(isset($_GET['estabamirando'])){
	$estaba_mirando_clase = $_GET['estabamirando'];
	$estaba_mirando_materia = $_GET['materia'];
	//mostrar mensaje toogle de ánimos sigue estudiando esta clase.... en la parte de scripts 
}

?> 
<!DOCTYPE html>
<html lang="es-es">
<head>
<title>Mis Cursos</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/courses.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
<!-- link de estilos para uso de toastr --> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">	 
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
									<li><div class="question">Bienvenido : <?php  echo $a['Nombre']." ".$a['Apellido']?>  </div></li>
									
									<li><div class="question"> <?php if($a['pago'] >= 1){ echo "Estudia... El conocimiento no ocupa lugar... ";
										
										
										}
										else{echo "Aún no te has registrado en  ninguna clase o curso";}
										
										
										
										
										?>
										 </div></li>
									
									
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="#" onclick="alert('Ya estas en la lista de tu clases')">Mis Clases</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>
<!-- Menu -->


	<!-- Header Content -->
    <div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="index.php">
									<div class="logo_text">Alumno <span><?php   echo $a['Nombre']; ?></span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									
									<li class="active"><a href="index.php">Inicio</a></li>
									<li><a href="miscursos.php">Mis Cursos</a></li>
									<li><a href="./clases/1bc/index.php">Ver más clases</a></li>
									
									<li><div class="top_bar_login ml-auto">
									<a href="../../logout.php?tk=<?php echo $_SESSION['token']?>">Cerrar Sesion</a></div>
								</li>
								</ul>
													
								<!-- Hamburger -->
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
								<?php if(isset($consulta32)):
								?>
								<div class="search_button"><h4 class="menu_mm">Vencidas</h4> </div>
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
						<div class="courses_search_container">

						
						<!-- aui podemos listar las clases activas y las vencidas con algo de informacion. -->
									<?php
									
									for($contador=1; $consulta32->num_rows>$contador; $contador++){$b=mysqli_fetch_assoc($consulta32);
									
										if($b['fecha_fin'] == $fecha_hoy){echo "<li>".$b['Nombre_clase']." "."Venció hoy";}
										if($b['fecha_fin']< $fecha_hoy){echo "<li>".$b['Nombre_clase']." vencida"." ".$b['fecha_fin'];}
										
													}	
									
									?>
						<!-- <form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
							<input type="search" class="courses_search_input" placeholder="Buscar Clase o Tema" required="required">
							<select id="courses_search_select" class="courses_search_select courses_search_input">
								<option>Todas las Categorias</option>
								<option>1° Bachillerato</option>
								<option>2° Bachillerato</option>
								<option>3° Bachillerato</option>
							</select>
							<button action="submit" class="courses_search_button ml-auto">Buscar Ahora</button>
						</form> -->
					</div> 
						</div>
						<?php
endif;
?>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		
		
		<nav class="menu_nav">
			
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.php">Inicio</a></li>
				
				<li class="menu_mm"><a href="miscursos.php">Mis Cursos</a></li>
				<li><a href="./clases/1bc/index.php">Ver más clases</a></li>
				
				
				<li class="menu_mm"><a href="../../logout.php?tk=<?php echo $_SESSION['token']?>">Cerrar Sesión</a></li>
				<li>	<div class="top_bar_login ml-auto" id="online">
											
											</div></li>
			</ul>
			
			<div></div>

		</nav>
	</div>
	
	
	<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.php">inicio</a></li>
								<li>Mis clases & cursos</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
				<div class="courses_search_container">
                    <form action="#" id="courses_search_form" method="post" autocomplete="on" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
							<input type="search" class="courses_search_input" name="palabra" placeholder="Buscar Clase o Tema" required="required">
							<button class='courses_search_button' action="submit"  >Buscar</button> 
								
						</form>						
					</div>
								<!-- Importamos configuración de cursos -->
								<?php include_once "./includes/configmiscursos1.php";	?>
												
									

											
					
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">
				<!-- PROMO LANZAMIENTO DESCUENTO 50% OFF CON MERCADO PAGO -->
					<div class="course_title"> <h3></h3></div>
					<iframe src="https://www.mercadopago.com.uy/descuentos?campaign_id=59410&show_legals_link=true&dont_show_legals=true&iframe=true" width="100%" height="400" seamless="" frameborder="0" scrolling="no"></iframe>
						<!-- Categories -->
						
						<div class="sidebar_section">
							<h5>Te dejamos un Archivo PDF con las funciones y accesos de la Plataforma, las actualizaciones aparecerán aquí también. </h5> <br>
							<div class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
								<div class="sidebar_banner_background" style="background-image:url(images/banner_1.jpg)"></div>
								<div class="sidebar_banner_overlay"></div>
								<div class="sidebar_banner_content">
									<div class="banner_title">PDF esquemático</div>
									<div class="banner_button"> <a href="Plataforma.pdf" download="Plataforma_STUDERE_Funciones_hasta_Junio_2019">Descar ahora</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<!-- <div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">sign up for news and offers</div>
							<div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
						</div> -->

						<!-- Newsletter Form -->
						<!-- <div class="newsletter_form_container ml-lg-auto">
							<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
								<input type="email" class="newsletter_input" placeholder="Your Email" required="required">
								<button type="submit" class="newsletter_button">subscribe</button>
							</form>
						</div> -->

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
	<?php 
	//incluimos el footer que esta en la carpeta includes.
		require ('./includes/footer.php');
	?>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/courses.js"></script>
<!-- scripts para uso de toastr -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- codigo de los mensajes de toatsr -->

<?php
if(isset($_GET['estabamirando'])){
echo '
<script>

toastr.info("Muy Bien, Sigue avanzando en tu clase de '. $estaba_mirando_clase.' de la materia '. $estaba_mirando_materia.'", "Info:", {
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
';}
?>
</body>
</html>