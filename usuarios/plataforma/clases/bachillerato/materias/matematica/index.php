<?php
include_once "../../../../../../includes/seguro.php";
include_once "../../../../../../includes/conectar.php";
$hola=$_SESSION['email'];
$query="SELECT * FROM usuario WHERE email='$hola' ";
$consulta=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>1° Bachillerato</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../../../styles/bootstrap4/bootstrap.min.css">
<link href="../../../../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../../../plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../../../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../../../../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../../../../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../../../../styles/courses.css">
<link rel="stylesheet" type="text/css" href="../../../../styles/courses_responsive.css">
<link rel="stylesheet" type="text/css" href="../../../../styles/course.css">
<link rel="stylesheet" type="text/css" href="../../../../styles/course_responsive.css">
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

		<!-- Header Content -->
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
									<a href="../../../../../../logout.php?tk=<?php echo $_SESSION['token']?>">Cerrar Sesion</a></div>
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
				
				<li class="menu_mm"><a href="#">Mis Cursos</a></li>
				<li class="menu_mm"><a href="../../../../../../perfil.php">Editar Perfil</a></li>
				
				<li class="menu_mm"><a href="../../../../../../logout.php?tk=<?php echo $_SESSION['token']?>">Cerrar Sesión</a></li>
			</ul>
			
			<div></div>

		</nav>
	</div>
	

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
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
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Buscar Clases" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="../../../../index.php">Inicio</a></li>
				<li class="menu_mm"><a href="#">Mis Cursos</a></li>
				<li class="menu_mm"><a href="../../../../perfil.php">Editar Perfil</a></li>
				<li><div class="top_bar_login ml-auto">
									<a href="../../../../../../logout.php?tk=<?php echo $_SESSION['token']?>">Cerrar Sesion</a></div>
								</li>
				
			</ul>
		</nav>
	</div>
	
	<!-- Home -->

	<br> <br>
	<div class="course">
		<div class="container">
			<div class="row">

				<!-- Course -->
				<div class="col-lg-8">
					
					<div class="course_container">
						
						<div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Profesor/a:</div>
								<div class="course_info_text">Rogelio Castro </div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Estrellas:</div>
								<div class="rating_r rating_r_5"><i></i><i></i><i></i><i></i><i></i></div>
							</div>

							<!-- Course Info Item -->
							<div class="course_info_item">
								<div class="course_info_title">Categoria:</div>
								<div class="course_info_text">Historia 4to año</div>
							</div>

						</div>

						<!-- Course Image -->
						<div class="course_image"><video src="video.mp4" alt="" width="750px" controls="true"> </div>

						<!-- Course Tabs -->
						<div class="course_tabs_container">
							<div class="tabs d-flex flex-row align-items-center justify-content-start">
								<div class="tab active">Descripcion</div>
								
							</div>
							<div class="tab_panels">

								<!-- Description -->
								<div class="tab_panel active">
									<div class="tab_panel_title">Descricion</div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p>Breve descricion de temas dados en el curso completo de todo el año y mensajes que multipliquen la posibilidad de compra para el usuario <br>
                                            Colocando también todas las herramientas que le faciliten el llevar el curso anual, si opta por el. <br>
                                            Aquí es lugar para establecer y dejar claro como esta estructurada la clase tanto modular como tematicamente. <br>
                                            si hay o no material de descarga y estudio extra, video conferencias, chat directo de consultas, 
                                            ejercicios y pruebas en el desarrollo del curso.</p>
										</div>
																					
									</div>
								</div>
					
			
							</div>
						</div>
					</div>
				</div>

				<!-- Course Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">
                    <div class="sidebar_section">
							<div class="sidebar_section_title">Temario Anual</div>
							<div class="sidebar_categories">
								<ul>
									<li><a href="#">Segunda Guerra Mundial</a></li>
									<li><a href="#">Una Paz Ficticia</a></li>
									<li><a href="#">Capitalismo y Socialismo</a></li>
									<li><a href="#">Descolonización y 3° Mundo</a></li>
                                    <li><a href="#">Mundo en Crisis 1973-1990</a></li>
                                    <li><a href="#">LationoAmérica Pos 2°da Guerra M</a></li>
									<li><a href="#">El Nuevo Orden Mundial</a></li>
									
									<li><a href="#">Los Derechos Humanos</a></li>
                                    <li><a href="#"></a></li>
                                    
									<li><a href="#"></a></li>
								</ul>
							</div>
						</div>
					
						
					

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Courses -->
    
	<div class="courses">
        
		<div class="container">
        <div class="course_title">Temas de Historia 1°ero Bachillerato</div>
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
				
					<div class="courses_container">
						<div class="row courses_row">
							
							<!-- Course -->
							<div class="col-lg-6 courses_col">
								<div class="course">
									<div class="course_image"><img src="../../../../images/2guerra.png" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course.html">Segunda Guerra</a></h3>
										<div class="courses_teacher">Duración:  Video: 4hs  Vconf: 2hs</div>
										<div class="courses_text">
											<p>Consecuencias de la segunda gurra Mundial: Balance y Valoración</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="courses_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="courses_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>63 Estudiantes</span>
											</div>
											
											<div class="course_price ml-auto">$800	<br> 			
											</div> 
											<form action="/procesos/procesar-pago.php" method="POST">
											
											<input type="text"  name="token" placeholder="token" value="">
											<input type="text" name="payment_method_id" placeholder="metodo de pago" value="mastercard">
											<input type="text" name="installments" placeholder="cuotas" >
											<input type="text" placeholder="id del emisor de la tarjeta" value="" name="issuer_id">
											<script
												src="https://www.mercadopago.com.uy/integrations/v1/web-tokenize-checkout.js"
												data-public-key="TEST-b546175f-461c-49b4-8890-63f7c93abc15
s"
												data-transaction-amount="800.00">
											</script>
											</form>
										</div>
										
									</div>
									
								</div>
								
							</div>

							<!-- Course -->
							<div class="col-lg-6 courses_col">
								<div class="course">
									<div class="course_image"><img src="../../../../images/pazficticia.png" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course.html">Paz Ficiticia</a></h3>
										<div class="courses_teacher">Duración:  Video: 5hs  Vconf: 2.5hs</div>
										<div class="courses_text">
											<p>Una Paz Ficticia 1945 - 1973</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="courses_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>63 Estudiantes</span>
											</div>
											
											<div class="course_price ml-auto">$800</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Course -->
							<div class="col-lg-6 courses_col">
								<div class="courses">
									<div class="course_image"><img src="../../../../images/capitalismovssocialismo.jpg" alt=""></div>
									<div class="courses_body">
										<h3 class="course_title"><a href="course.html">Capitalismo & Socialismo</a></h3>
										<div class="course_teacher">Duración:  Video: 4hs  Vconf: 2hs</div>
										<div class="course_text">
											<p>Capitalismo vs Socialismo <br> Dos vías para el Desarrollo</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="courses_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>63 Estudiantes</span>
											</div>
											
											<div class="course_price ml-auto">$800</div>
										</div>
									</div>
								</div>
                            </div>
                            <div class="col-lg-6 courses_col">
								<div class="courses">
									<div class="course_image"><img src="../../../../images/descolonizacion.jpg" alt=""></div>
									<div class="courses_body">
										<h3 class="course_title"><a href="course.html">Descolonización</a></h3>
										<div class="course_teacher">Duración:  Video: 4hs  Vconf: 2hs</div>
										<div class="course_text">
											<p>La Descolonización y el Tercer Mundo</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="courses_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>63 Estudiantes</span>
											</div>
											
											<div class="course_price ml-auto">$800</div>
										</div>
									</div>
								</div>
                            </div>

                            <div class="col-lg-6 courses_col">
								<div class="courses">
									<div class="course_image"><img src="../../../../images/mundoencrisis.jfif" width="400px" alt=""></div>
									<div class="courses_body">
										<h3 class="course_title"><a href="course.html">Un Mundo en Crisis</a></h3>
										<div class="course_teacher">Duración:  Video: 4hs  Vconf: 2hs</div>
										<div class="course_text">
											<p>Un Mundo en Crisis 1973-1990</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="courses_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>63 Estudiantes</span>
											</div>
											
											<div class="course_price ml-auto">$800</div>
										</div>
									</div>
								</div>
                            </div>
                            <div class="col-lg-6 courses_col">
								<div class="courses">
									<div class="course_image"><img src="../../../../images/2guerra.png" alt=""></div>
									<div class="courses_body">
										<h3 class="course_title"><a href="course.html">Segunda Guerra</a></h3>
										<div class="course_teacher">Duración:  Video: 4hs  Vconf: 2hs</div>
										<div class="course_text">
											<p>Consecuencias de la segunda gurra Mundial: Balance y Valoración</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="courses_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>63 Estudiantes</span>
											</div>
											
											<div class="course_price ml-auto">$800</div>
										</div>
									</div>
								</div>
                            </div>
                            <div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="../../../../images/2guerra.png" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course.html">Segunda Guerra</a></h3>
										<div class="course_teacher">Duración:  Video: 4hs  Vconf: 2hs</div>
										<div class="course_text">
											<p>Consecuencias de la segunda gurra Mundial: Balance y Valoración</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="courses_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>63 Estudiantes</span>
											</div>
											
											<div class="course_price ml-auto">$800</div>
										</div>
									</div>
								</div>
                            </div>
                            <div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="../../../../images/2guerra.png" alt=""></div>
									<div class="course_body">
										<h3 class="course_title"><a href="course.html">Segunda Guerra</a></h3>
										<div class="course_teacher">Duración:  Video: 4hs  Vconf: 2hs</div>
										<div class="course_text">
											<p>Consecuencias de la segunda gurra Mundial: Balance y Valoración</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="courses_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>63 Estudiantes</span>
											</div>
											
											<div class="course_price ml-auto">$800</div>
										</div>
									</div>
								</div>
							</div>
                            
                            <!-- fin cursos -->

						</div>
						
					</div>
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Categories -->
						

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Mini Cursos</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="../../../../images/latest_1.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">Programar? <br> Conceptos & Herramientas </a></div>
										<div class="latest_price">Js & PHP</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="../../../../images/latest_1.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">Programar? <br> Conceptos & Herramientas </a></div>
										<div class="latest_price">Js & PHP</div>
									</div>
								</div>

								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="../../../../images/latest_1.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="course.html">Programar? <br> Conceptos & Herramientas </a></div>
										<div class="latest_price">Js & PHP</div>
									</div>
								</div>

							</div>
						</div>

						<!-- Gallery -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Promoción Imperdible!</div>
							<div class="sidebar_gallery">
								<ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="../../../../images/gallery_1_large.jpg">
											<img src="../../../../images/gallery_1.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="../../../../images/gallery_2_large.jpg">
											<img src="../../../../images/gallery_2.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="../../../../images/gallery_3_large.jpg">
											<img src="../../../../images/gallery_3.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="../../../../images/gallery_4_large.jpg">
											<img src="../../../../images/gallery_4.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="../../../../images/gallery_5_large.jpg">
											<img src="../../../../images/gallery_5.jpg" alt="">
										</a>
									</li>
									<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="../../../../images/gallery_6_large.jpg">
											<img src="../../../../images/gallery_6.jpg" alt="">
										</a>
									</li>
								</ul>
							</div>
						</div>

						<!-- Tags -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Etiquetas</div>
							<div class="sidebar_tags">
								<ul class="tags_list">
									<li><a href="#">Aprender</a></li>
									<li><a href="#">Examen</a></li>
									<li><a href="#">Parcial</a></li>
									<li><a href="#">ideas</a></li>
									<li><a href="#">4°Año</a></li>
									<li><a href="#">Ejercicios</a></li>
								</ul>
							</div>
						</div>

						<!-- Banner -->
						<div class="sidebar_section">
							<div class="sidebar_banner d-flex flex-column align-items-center justify-content-center text-center">
								<div class="sidebar_banner_background" style="background-image:url(../../../../images/banner_1.jpg)"></div>
								<div class="sidebar_banner_overlay"></div>
								<div class="sidebar_banner_content">
									<div class="banner_title">Historia año Completo</div>
									<div class="banner_button"><a href="#">Cursar Ahora</a></div>
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
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="../../../../images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">Aquí se puede agreagar algo de informacion</div>
							<div class="newsletter_subtitle">detalles de clases o informacion de interés</div>
						</div>

						<!-- Newsletter Form -->
						

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<?php include_once "../../../../includes/footer.php"; ?>
	</footer>
</div>

<script src="../../../../js/jquery-3.2.1.min.js"></script>
<script src="../../../../styles/bootstrap4/popper.js"></script>
<script src="../../../../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../../../../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../../../../plugins/easing/easing.js"></script>
<script src="../../../../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../../../../plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="../../../../js/courses.js"></script>
</body>
</html>
