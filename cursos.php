<?php

?>

<!DOCTYPE html>
<html lang="es-la">
<head>
<title>Plataforma Studere</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Plataforma de Estudios de Educación Secundaria, VideoConferencias, Chat con los Profesores, Videos, Examenes, Parciales y Escritos.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./usuarios/plataforma/styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./usuarios/plataforma/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="./usuarios/plataforma/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="./usuarios/plataforma/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="./usuarios/plataforma/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="./usuarios/plataforma/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="./usuarios/plataforma/styles/buscadorindex.css">
<link href="styles/toastr.css" rel="stylesheet"/>


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
									<li><div class="question">Tienes alguna Pregunta?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>(+598) 096 635 675</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>contacto@studere.com.uy</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="./login">Iniciar sesión </a></div>
								</div>
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
								<a href="#">
									<div class="logo_text">Studere<span>.uy</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li ><a href="./index.php">Inicio</a></li>
									<li ><a href="#">Acerca de...</a></li>
									<li class="active"><a href="./cursos.php">Cursos</a></li>
									
									<li><a href="./usuarios/plataforma/estudiando/register.php?nuevo_registro">Registrarse</a></li>
									<li><a href="#">Contacto</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								
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
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Buscar en Studere" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
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
				<input type="search" class="search_input menu_mm" placeholder="Buscar en Studere..." required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
                <li class="menu_mm"><a href="./index.php">Inicio</a></li>
				<li class="menu_mm"><a href="#">Acerca de</a></li>
				<li class="menu_mm"><a href="#">Cursos</a></li>
				<li class="menu_mm"><a href="#">Contacto</a></li>
                <li class="menu_mm"><a href="./login.php">Iniciar Sesion</a></li>
                <li class="menu_mm"><a href="./usuarios/plataforma/estudiando/register.php?nuevo_registro">Registrarse!</a></li>
			</ul>
		</nav>
	</div>
	

	<div class="home">
		

		

	
	<br>
		
		<div class="courses">
			<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container text-center">
							<br>
							<h2 class="section_title">Selecciona tu Bachillerato</h2>
							
						</div>
					</div>
				</div>
				<div class="row courses_row">
					
					
					<!-- Course -->
					<div class="col-lg-4 course_col">
						<div class="course">
							<div class="course_image"><img src="images/clase_1.jpg" alt=""></div>
							<div class="course_body">
								<h3 class="course_title"><a href="./clases/1bc/index.php">1°ero Bachillerato</a></h3>
								<div class="course_teacher">4°to año</div>
								<div class="course_text">
									<p>Todas Las Materias del año de la mano de Actuales Profesores de CES</p>
									<li>Activo</li>
								</div>
							</div>
							<div class="course_footer">
								<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
										<span>197 Estudiantes</span>
									</div>
									<div class="course_info">
										<i class="fa fa-star" aria-hidden="true"></i>
										<span>5 Estrellas</span>
									</div>
									<div class="course_price ml-auto"></div>
								</div>
							</div>
						</div>
					</div>
	
					<!-- Course -->
				
					<div class="col-lg-4 course_col">
						<div class="course">
							<div class="course_image" onclick="alert('Disculpa actualmente esta deshabilitado pero pronto estará disponilbe')"><img src="images/clase_2.jpg"></div>
							<div class="course_body">
								<h3 class="course_title"><a href="#" onclick="alert('Disculpa actualmente esta deshabilitado pero pronto estará disponilbe')">2°do Bachillerato</a></h3>
								<div class="course_teacher">En Proceso de Creación</div>
								<div class="course_text">
									<p>Todas las Materias de 5to Año
										<li>Deshabilitado</li>
										
											</p>
								</div>
							</div>
							<div class="course_footer">
								<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
										<span>0 Estudiantes</span>
									</div>
									<div class="course_info">
										<i class="fa fa-star" aria-hidden="true"></i>
										<span>0 Estrellas</span>
									</div>
									<div class="course_price ml-auto">$00000</div>
								</div>
							</div>
						</div>
					</div>
	
					<!-- Course -->
					<div class="col-lg-4 course_col">
						<div class="course">
							<div class="course_image"><img src="images/clase_2.jpg" onclick="alert('Disculpa actualmente esta deshabilitado pero pronto estará disponilbe')" alt=""></div>
							<div class="course_body">
								<h3 class="course_title"><a href="#"  onclick="alert('Disculpa actualmente esta deshabilitado pero pronto estará disponilbe')">3°ero Bachillerato</a></h3>
								<div class="course_teacher">En Proceso de Creación</div>
								<div class="course_text">
									<p>Todas las materias de 6to año 
										<li>Deshabilitado</li>
																	</p>
								</div>
							</div>
							<div class="course_footer">
								<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
									<div class="course_info">
										<i class="fa fa-graduation-cap" aria-hidden="true"></i>
										<span>0 Estudiantes</span>
									</div>
									<div class="course_info">
										<i class="fa fa-star" aria-hidden="true"></i>
										<span>0 Estrellas</span>
									</div>
									<div class="course_price ml-auto"><span>$0000</span></div>
								</div>
								
							</div>
							
						</div>
					</div>
					
	
				</div>
				<br>
				<br>	
			</div>
		</div>
		
		</div>
<!-- Features -->

	
	<!-- Footer -->

	<footer class="footer">
            <div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
            <div class="container">
                <div class="row footer_row">
                    <div class="col">
                        <div class="footer_content">
                            <div class="row">

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer About -->
                                    <div class="footer_section footer_about">
                                        <div class="footer_logo_container">
                                            <a href="#">
                                                <div class="footer_logo_text">Studere<span>.uy</span></div>
                                            </a>
                                        </div>
                                        <div class="footer_about_text">
                                            <p>Studere.uy plataforma de estudios online con SSL Security </p>
                                        </div>
                                        <div class="footer_social">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer Contact -->
                                    <div class="footer_section footer_contact">
                                        <div class="footer_title">Contacto</div>
                                        <div class="footer_contact_info">
                                            <ul>
                                                <li>Email: contacto@studere.uy</li>
                                                <li>Wpp: +(598) 096 635 675</li>
                                                <li>Tacuarembó, Uruguay 2019</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-3 footer_col">

                                    <!-- Footer links -->


                                </div>

                                <div class="col-lg-3 footer_col clearfix">

                                    <!-- Footer links -->
                                    <div class="footer_section footer_mobile">
                                        <div class="footer_title">Multi Plataforma</div>
                                        <div class="footer_mobile_content">
                                            <div class="footer_image">
                                                <a href="./Studere.apk" download="App Studere.uy" >Compatible para SmartPhones</a>
                                            </div>
                                            <div class="footer_image">
                                                <a href="#">Compatible para Tablets</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row copyright_row">
                    <div class="col">
                        <div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
                            <div class="cr_text">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> Todos los derechos Reservados | studere.uy & studere.com.uy 2019 Tacuarembó,Tacuarembó,Uruguay 
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                            <div class="ml-lg-auto cr_links">
                                <ul class="cr_list">
                                   
                                    <li><a href="#">Terminos de uso</a></li>
                                    <li><a href="#">Políticas de Privacidad</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
</div>

<script src="./usuarios/plataforma/js/jquery-3.2.1.min.js"></script>
<script src="./usuarios/plataforma/styles/bootstrap4/popper.js"></script>
<script src="./usuarios/plataforma/styles/bootstrap4/bootstrap.min.js"></script>
<script src="./usuarios/plataforma/plugins/greensock/TweenMax.min.js"></script>
<script src="./usuarios/plataforma/plugins/greensock/TimelineMax.min.js"></script>
<script src="./usuarios/plataforma/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="./usuarios/plataforma/plugins/greensock/animation.gsap.min.js"></script>
<script src="./usuarios/plataforma/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="./usuarios/plataforma/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="./usuarios/plataforma/plugins/easing/easing.js"></script>
<script src="./usuarios/plataforma/plugins/parallax-js-master/parallax.min.js"></script>

<script src="js/about.js"></script>
<script src="js/toastr.js"></script>



<script src="plugins/colorbox/jquery.colorbox-min.js"></script>

</body>
</html>