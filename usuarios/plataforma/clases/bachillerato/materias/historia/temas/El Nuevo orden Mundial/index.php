<?php 
include_once "../../../../../../../../includes/seguro.php";
include_once "../../../../../../../../includes/conectar.php";
include_once "../../../../../../includes/coneccionbdclases.php";
$query="SELECT * FROM historia";
$consulta=consultar3SQL($query);
$datos = mysqli_fetch_assoc($consulta);
$hola=$_SESSION['email'];
$query="SELECT * FROM usuario WHERE email='$hola' ";
$consulta2=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta2)



?>


<!DOCTYPE html>
<html lang="es">
<head>
<title>Segunda guerra Mundial</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../../../../../styles/bootstrap4/bootstrap.min.css">
<link href="../../../../../../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../../../../../plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../../../../../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../../../../../../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../../../../../../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../../../../../../styles/about.css">
<link rel="stylesheet" type="text/css" href="../../../../../../styles/about_responsive.css">
</head>
<body>

<div class="super_container">
<header class="header">
	<!-- Header -->
	<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Tienes alguna pregunta?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>097 014 192</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>contacto@plataformastudere.com.uy</div>
									</li>
								</ul>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

	<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="../../../../../../index.php">
									<div class="logo_text">Alumno <span><?php   echo $a['Nombre']; ?></span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									
									<li><a href="../../../../../../index.php">Inicio</a></li>
									<li><a href="../../../../../../cursos.php">Mis Cursos</a></li>
									<li><a href="../../../../../../perfil.php">Editar Perfil</a></li>
									<li><div class="top_bar_login ml-auto">
									<a href="../../../../../../../../logout.php?tk=<?php echo $_SESSION['token']?>">Cerrar Sesion</a></div>
								</li>
								</ul>
																
								<!-- Hamburger -->

								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>
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
						<form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
							<input type="search" class="courses_search_input" placeholder="Buscar Clase o Tema" required="required">
							<select id="courses_search_select" class="courses_search_select courses_search_input">
								<option>Todas las Categorias</option>
								<option>1° Bachillerato</option>
								<option>2° Bachillerato</option>
								<option>3° Bachillerato</option>
							</select>
							<button action="submit" class="courses_search_button ml-auto">Buscar Ahora</button>
						</form>
					</div> 
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		
		<nav class="menu_nav">
			
			<ul class="menu_mm">
				<li class="menu_mm"><a href="../../../../../../index.php">Inicio</a></li>
				<li class="menu_mm"><a href="../../../../../../miscursos.php">Mis Cursos</a></li>
				<li class="menu_mm"><a href="../../../../../../perfil.php">Editar Perfil</a></li>
				
				<li class="menu_mm"><a href="../../../../../../../../logout.php?tk=<?php echo $_SESSION['token']?>">Cerrar Sesión</a></li>
			</ul>
			
			<div></div>

		</nav>
	</div>
	

	
	<!-- Home -->

    <br> 
	<br>
	<br>

	<!-- About -->

	

	<!-- Feature -->

	<div class="feature">
		<div class="feature_background" style="background-image:url(../../../../../../images/fondode3.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="counter_title ">Consecuencias de la Segunda Guerra Mundial</h2>
						
					</div>
				</div>
			</div>
			<div class="row feature_row">

				<!-- Feature Content -->
				<div class="col-lg-12 feature_col">
					<div class="feature_content">
						<!-- Accordions -->
						<div class="accordions">
						<h2 class="counter_title">Sub-temas</h2> <br>
							<div class="elements_accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div> <h5>subtema_1</h5> El Impacto Demográfico</div></div>
									<div class="accordion_panel">
                                       
                                        <div>
					                    <div class="video">
										<video   id="video" width="700px" controls  preload="auto">
											<script lenguage="javascript">
												let xhr = new XMLHttpRequest();

												//creamos peticion al servidor
												xhr.open('GET','./consecuencias.mp4');

												//seteamos el tipo de respuesta a un array buffer
												xhr.responseType = 'arraybuffer';

												//definimos un manejador (handler) para la respuesta del servidor

												xhr.onload = (e)=>{
													let blob = new Blob([xhr.response])
													let url = URL.createObjectURL(blob)

													let imagen = document.getElementById('video')
													imagen.src = url;
												}
												xhr.send();	
 											 

											
											</script>
					
										</div>	
										
										<br>
										<p>Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplovTexto de ejemplo Texto de ejemplo <br>
										Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov 
									<br>Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov 
									Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov 
									Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov 
								<br>
								Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov </p>
									</div>
											<br>
											
								</div>
										
                                        
									</div> <br>
								</div> 
								

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div> <h5>subtema_2</h5> las Repercuciones Económicas</div></div>
									<div class="accordion_panel">
									<div class="video">
										<video   id="video" width="700px" controls  preload="auto">
											<script lenguage="javascript">
												let xhr = new XMLHttpRequest();

												//creamos peticion al servidor
												xhr.open('GET','./consecuencias.mp4');

												//seteamos el tipo de respuesta a un array buffer
												xhr.responseType = 'arraybuffer';

												//definimos un manejador (handler) para la respuesta del servidor

												xhr.onload = (e)=>{
													let blob = new Blob([xhr.response])
													let url = URL.createObjectURL(blob)

													let imagen = document.getElementById('video')
													imagen.src = url;
												}
												xhr.send();	
 											 

											
											</script>
					
										</div>	<br>
									<p>Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplovTexto de ejemplo Texto de ejemplo <br>
										Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov 
									<br>Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov 
									Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov 
									Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov 
								<br>
								Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov </p>
									</div>
								</div> <br>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div> <h5>subtema_3</h5>Acuerdos Políticos y Cambios Territoriales</div></div>
									<div class="accordion_panel">
									<div class="video">
										<video   id="video" width="700px" controls  preload="auto">
											<script lenguage="javascript">
												let xhr = new XMLHttpRequest();

												//creamos peticion al servidor
												xhr.open('GET','./consecuencias.mp4');

												//seteamos el tipo de respuesta a un array buffer
												xhr.responseType = 'arraybuffer';

												//definimos un manejador (handler) para la respuesta del servidor

												xhr.onload = (e)=>{
													let blob = new Blob([xhr.response])
													let url = URL.createObjectURL(blob)

													let imagen = document.getElementById('video')
													imagen.src = url;
												}
												xhr.send();	
 											 

											
											</script>
					
										</div>	<br>
										<p>Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplovTexto de ejemplo Texto de ejemplo <br>
										Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov 
									<br>Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov 
									Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov 
									Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov 
								<br>
								Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemploTexto de ejemplo Texto de ejemplo Texto de ejemplov </p>
									</div>
								</div>

								<br><h2 class="  counter_title"> Ejercicios  </h2><br>
								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div> <h5>Ejercicio 1</h5> Probando ejercicios en google y la plataforma</div></div>
									<div class="accordion_panel">
									<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfAsYePtX2Hu_l4cW6L_MduKi4tKnpXyT7PGyRNeOtIYBO_nQ/viewform?embedded=true" width="640" height="2052" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>									
									</div>
								</div>
								

						</div>
						<!-- Accordions End -->
					</div>
				</div>

							
				
				
			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Los Mejores Profesores a tu Alcance</h2>
						<div class="section_subtitle"><p>Son actuales Profesores de Secuandaria que ejercen la profesión y están aquí, con ésta herramienta de estudios online tienes acceso a todo el contenido actualizado que se enseña en Secundaria en el día de hoy</p></div>
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="../../../../../../images/team_1.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Nombre del Profe</a></div>
							<div class="team_subtitle">Inglés</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="../../../../../../images/team_2.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Nombre del Profe</a></div>
							<div class="team_subtitle">Historia</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="../../../../../../images/team_3.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Nombre del Profe</a></div>
							<div class="team_subtitle">Matemáticas</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="../../../../../../images/team_4.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Nombre del Profe</a></div>
							<div class="team_subtitle">Química</div>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Counter -->

	<div class="counter">
		<div class="counter_background" style="background-image:url(../../../../../../images/counter_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="counter_content">
						<h2 class="counter_title">Súmate a Nuestras Clases</h2>
						<div class="counter_text"><p>Escribir algún mesnsaje que estimule al alumno para que compre y acceda a otroas clases no sólo la actual, como ofertas 2 x 1 etc....s.</p></div>

						<!-- Milestones -->

						<div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">
							
							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="1300" data-sign-after="+">0</div>
								<div class="milestone_text">Estudiantes</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="53">0</div>
								<div class="milestone_text">Profes</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="3670" data-sign-after="+">0</div>
								<div class="milestone_text">Horas Video</div>
							</div>

							<!-- Milestone -->
							<div class="milestone">
								<div class="milestone_counter" data-end-value="45">0</div>
								<div class="milestone_text">VConf x día</div>
							</div>

						</div>
					</div>

				</div>
			</div>

			<div class="counter_form">
				<div class="row fill_height">
					<div class="col fill_height">
						<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" action="#">
							<div class="counter_form_title">Súmate Ahora</div>
							<input type="text" class="counter_input" placeholder="Tu Nombre:" required="required">
							<input type="tel" class="counter_input" placeholder=":" required="required">
							<select name="counter_select" id="counter_select" class="counter_input counter_options">
								<option>Elige una Opción</option>
								<option>Preparar Exámenes</option>
								<option>Tomar curso x Temas</option>
								<option>Cursar Una Materia</option>
								<option>Cursar Todo Un AÑO!</option>
							</select>
							<textarea class="counter_input counter_text_input" placeholder="Te gustaría Agregar algo?:" required="required"></textarea>
							<button type="submit" class="counter_form_button">Inscribirme!</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Partners -->

	<div class="partners">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="partners_slider_container">
						<div class="owl-carousel owl-theme partners_slider">

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="../../../../../../images/partner_1.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="../../../../../../images/partner_2.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="../../../../../../images/partner_3.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="../../../../../../images/partner_4.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="../../../../../../images/partner_5.png" alt=""></div>

							<!-- Partner Item -->
							<div class="owl-item partner_item"><img src="../../../../../../images/partner_6.png" alt=""></div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
	<?php  include_once "../../../../../../includes/footer.php" ;?>
	</footer>
</div>

<script src="../../../../../../js/jquery-3.2.1.min.js"></script>
<script src="../../../../../../styles/bootstrap4/popper.js"></script>
<script src="../../../../../../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../../../../../../plugins/greensock/TweenMax.min.js"></script>
<script src="../../../../../../plugins/greensock/TimelineMax.min.js"></script>
<script src="../../../../../../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../../../../../../plugins/greensock/animation.gsap.min.js"></script>
<script src="../../../../../../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../../../../../../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../../../../../../plugins/easing/easing.js"></script>
<script src="../../../../../../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../../../../../../plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="../../../../../../js/about.js"></script>
</body>
</html>