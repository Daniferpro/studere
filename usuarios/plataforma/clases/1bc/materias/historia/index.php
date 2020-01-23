<?php
include_once "../../../../../../includes/seguro.php";
include_once "../../../../../../includes/conectar.php";
include_once "../../../../includes/coneccionbdclases.php";
include_once "procesos/consulta_pago.php";

$email=$_SESSION['email'];
$query="SELECT * FROM usuario WHERE email='$email' ";
$consulta=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta);
$alumno=$a['Nombre'].$a['Apellido']." ".$email;

$query1="SELECT * FROM clases WHERE Alumno='$alumno' AND materia='historia'";
$consult=consultarSQL($query1);

$query2="SELECT * FROM historia";
$consulta2=consultar3SQL($query2);

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
<link rel="stylesheet" type="text/css" href="../../../../styles/contact.css">
<link rel="stylesheet" type="text/css" href="../../../../styles/contact_responsive.css">

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
									<li><div class="question">Bienvenido : <?php echo $a['Nombre']." ".$a['Apellido']; ?> </div></li>
									
									
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
								<a href="../../../../index.php">
									<div class="logo_text">Alumno <span><?php   echo $a['Nombre']; ?></span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									
									<li><a href="../../../../.../../index.php">Inicio</a></li>
									<li><a href="../../../../miscursos.php">Mis Cursos</a></li>
									<li><a href="../../../../perfil.php">Editar Perfil</a></li>
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
				
				<li class="menu_mm"><a href="../../../../../../miscursos.php">Mis Cursos</a></li>
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
						<div class="course_video">
						<div class="course_image">
										<video id="video" width="100%" controls  preload="auto">
											
					
										</div>	
						 </div>

						<!-- Course Tabs -->
						<div class="course_tabs_container">
							<div class="tabs d-flex flex-row align-items-center justify-content-start">
								<div class="tab active">Descripcion</div>
							
								
							</div>
							<div class="tab_panels">

								<!-- Description -->
								<div class="tab_panel active">
									<div class="tab_panel_title">Bienvenido</div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p>Aquí encontrarás Los temas que perteneces a la materia Historia del curso de 4°to año Bachillerato,
											 Ten encuenta que adquiriendo cualquiera de los temas o compras por pack, incluyen VideoConferencias, Chat directo con el Profesor Responsable,
											 y acceso al material completo correspondiente.	</p>
										</div>
										
										
										
									</div>
								</div>

								<!-- mATERIAL DE ESTUDIO -->
								


								

							</div>
						</div>
					</div>
				</div>
				<!-- Course Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">
                    <div class="sidebar_section">
							<div class="sidebar_section_title">Tus Clases de Historia</div>
							<div class="sidebar_categories">
							
								<ul>
							<?php 
								while($ass=mysqli_fetch_assoc($consult)):					
							?>

								<li><a href='temas/<?php echo $ass['Nombre_clase'];?>/'><?php echo $ass['Nombre_clase'];?></a></li>	

								
							<?php
							endwhile;
							?>
							<br>
							<br>
								<div class="sidebar_section_title">Temario Anual</div>
							<?php
							while($info_clase=mysqli_fetch_assoc($consulta2)):
							?>

								
								
							<li><a  href='../../registra_fatc.php?id=<?php echo $info_clase['nombre_clase'];?>&materia=historia&usuario=<?php echo $a['id'];?>&precio=<?php echo $info_clase['precio'];?>,00&id2=<?php echo $info_clase['id'];?>'><?php echo $info_clase['nombre_clase'];?></a></li>
						
						    <?php
						    endwhile;
							?>
								<br>
								
							</div>
								</div>";
									
                                   
							
							
							
							
							
							
							
							
							
								</ul>
							</div>
						</div>
					
						
					

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Courses -->
    
	
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
											<div class="footer_logo_text">Studere<span>Plataform</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Es una creación de  <br> Asociados</p>
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

							<div class="col-lg-4 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contacto</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: contacto@studere.uy</li>
											<li>Celular:  +(598) 096 635 675</li>
											<li>Tacuarembó, Tacuarembó , Uruguay</li>
										</ul>
									</div>
								</div>
								
							</div>
							<div class="col-lg-2 footer_col">
					
								<!-- Footer Contact -->
								
								
							</div>
							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									
									<div class="footer_contact_info">
										<img src="../../../../../../images/images/logo4.png" width="80%" >
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
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos lo derechos reservados | StuderePlataform</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								
								<li><a href="#">Terminos de uso</a></li>
								<li><a href="#">Política de Privacidad</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
    

    
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
<script src="../../../../js/course.js"></script>





<script lenguage="javascript">


	
let xhr = new XMLHttpRequest();

//creamos peticion al servidor
xhr.open('GET','../../../../../../../video/Juntos Podemos Mas.mp4');

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
</body>
</html>
