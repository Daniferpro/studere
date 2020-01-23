<?php
include_once "../../includes/seguro.php";
include_once "../../includes/conectar.php";
include_once "includes/actualzar_estado_de_clases.php";
include_once "includes/coneccionbdclases.php";
$hola=$_SESSION['email'];
$query="SELECT * FROM usuario WHERE email='$hola' ";
$consulta=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta);
$alumno=$a['Nombre'].$a['Apellido']." ".$a['Email'];

$query="SELECT * FROM clases WHERE Alumno='$alumno' ORDER BY fecha_fin DESC";
$consulta32=consultarSQL($query);

$fecha_hoy= date("Y-m-d"); //fecha de hoy
$resultado=mysqli_fetch_assoc($consulta32);
if(!isset($_COOKIE['contador']))
{ 
  // Caduca en un año   
  setcookie('contador', 0 , time() + 365 * 24 * 60 * 60); 
  $mensaje = 'Número de visitas: ' . $_COOKIE['contador']; 
} 
else 
{ 
  // Caduca en un año 
  setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60); 
  $mensaje = 'Bienvenido a Plataforma Studere'; 
} 

 
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
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/buscadorindex.css">
<link href="styles/toastr.css" rel="stylesheet"/>

<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('online').innerHTML = req.responseText;
					
				}
			}

			req.open('GET', 'online.php', true);
			req.send();
		}

			//linea que hace que se refreseque la pagina cada segundo
		setInterval(function(){ajax();}, 500);	

		
	</script>
</head>
<body onload="ajax();">
	<!-- chat interactivo con AI
<script type="text/javascript">(function(){var ldk=document.createElement('script'); ldk.type='text/javascript'; ldk.async=true; ldk.src='https://s.cliengo.com/weboptimizer/5cfb0d68e4b003abf5067580/5cfb0d69e4b003abf5067583.js'; var s=document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s);})();</script> -->

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
									
									<li><div class="question"> <?php //actualizacion de la barra header donde mostramos informacion del alumno.
									if($consulta32->num_rows>0){ echo "Tienes:"." ".$consulta32->num_rows." "."Clases en tu lista";}
									else{echo "Aún no te has registrado en  ninguna clase o curso ¿Que esperas? anímate....  ";}
									
										?>
										 </div></li>
										 <li><div class="question"><?php  if(!isset($_COOKIE['contador'])){ echo "Bienvenido a la Plataforma Studere ";}elseif($_COOKIE['contador'] >= 1){ echo "Número de tus visitas:  ".$_COOKIE['contador'];}?>  </div></li>
									
									
								</ul>
								<div class="top_bar_login ml-auto" id="online">
											
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
								<a href="index.php">
									<div class="logo_text">Alumno <span><?php   echo $a['Nombre']; ?></span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">

									<li class="active"><a href="index.php">Inicio</a></li>
									<!-- <li ><a href="https://forms.gle/Xk3LAQnVXmPhcvFs5">Realizar Encuenta</a></li> -->
										
									<li><a href="miscursos.php">Mis Cursos</a></li>
									
									<li><div class="top_bar_login ml-auto">
									<a href="../../logout.php?tk=<?php echo $_SESSION['token']?>">Cerrar Sesion</a></div>
								</li>
								</ul>
													
								<!-- Hamburger -->
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
									
									for($contador=1; ($consulta32->num_rows)>$contador; $contador++){$b=mysqli_fetch_assoc($consulta32);
									
										if($b['fecha_fin'] == $fecha_hoy){echo "<li>".$b['Nombre_clase']." "."Venció hoy";}
										if($b['fecha_fin']< $fecha_hoy){echo "<li>".$b['Nombre_clase']." venció el "." ".$b['fecha_fin'];}
										
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
				
				
				<li class="menu_mm"><a href="../../logout.php?tk=<?php echo $_SESSION['token']?>">Cerrar Sesión</a></li>
					
			</ul>
			
			<div></div>

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
		<?php include_once "./includes/footer.php"; ?>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>

<script src="js/about.js"></script>
<script src="js/toastr.js"></script>



<script src="plugins/colorbox/jquery.colorbox-min.js"></script>

</body>
</html>