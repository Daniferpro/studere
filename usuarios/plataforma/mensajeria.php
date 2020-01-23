<?php
include_once "../../includes/seguro.php";
include_once "../../includes/conectar.php";


include "db.php";
$email=$_SESSION['email'];
$query="SELECT * FROM usuario WHERE email='$email' ";
$consulta=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta);
$usuario=$a['Nombre'].$a['Apellido'];
$consultachat="SELECT * FROM $usuario ORDER BY id DESC";
$conexion->query($consultachat);
$materia_chat=$_GET['materia'];
$_SESSION['materia']=$materia_chat;

?>

<!DOCTYPE html>
<html lang="es-es">
<head>
<title>1° Bachillerato</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
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
<link rel="stylesheet" type="text/css" href="styles/course.css">
<link rel="stylesheet" type="text/css" href="styles/course_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

<script type="text/javascript">
		function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('chat').innerHTML = req.responseText;
				}
			}

			req.open('GET', 'chat.php', true);
			req.send();
		}

		//linea que hace que se refreseque la pagina cada segundo
		setInterval(function(){ajax();}, 500);
	</script>
</head>
<body onload="ajax();">

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
									<li><div class="question"> <?php if($a['pago'] >= 1){ echo "Tus Clases :"." ".$a['materias'];}else{echo "Aún no te has registrado en  ninguna clase o curso";} ?> </div></li>
									
									
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
								<a href="index.php">
									<div class="logo_text">Alumno <span><?php   echo $a['Nombre']; ?></span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									
									<li><a href="index.php">Inicio</a></li>
									<li><a href="miscursos.php">Mis Cursos</a></li>
									<li><a href="perfil.php">Editar Perfil</a></li>
									<li><div class="top_bar_login ml-auto">
									<a href="../../logout.php?tk=<?php echo $_SESSION['token']?>">Cerrar Sesion</a></div>
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

	<br> <br> <br><br>
	<div class="course">
		<div class="container">
			<div class="row">

				<!-- Course -->
				<div class="col-lg-8">
					
					<div class="course_container">
						
					

						

						<!-- Course Tabs -->
						<div class="course_tabs_container">
							<div class="tabs d-flex flex-row align-items-center justify-content-start">
								<div class="tab">Instrucciones del chat</div>
								<!-- configurar para que muestre esta pestaña solo si tiene alguna clase de esta materia comprada -->
								<div class="tab active">Chat</div>
								
							</div>
							<div class="tab_panels">

								<!-- Description -->
								<div class="tab_panel tb_panel2">
									<div class="tab_panel_title">Bienvenido!</div>
									<div class="tab_panel_content">
										<div class="tab_panel_text">
											<p>Estimado Alumno, te damos la bienvenida a la sección de consultas
												<li>ten en cuenta que te responderá lo antes posible pero podría tardar hasta 24 horas.</li>
												<li>Solo se muestran los últimos 10 mensajes enviados</li>
												<li>Luego de Aclarado el tema el Tutor reiniciará el chat.</li>
												<li>Tus consultas tambien pueden ser aclaradas mediante las vieoconferencias.</li>
												<li>Ten en cuenta que solo se permiten éstos medios de comunicación con los profesores.</li>
												<li>Agradecemos su comprensión.</li> </p>
										</div>
										
										
										
									</div>
								</div>

								<!-- mATERIAL DE ESTUDIO -->
								<div class="tab_panel active">
									<div class="tab_panel_content ">
										<div class="tab_panel_title">Chat</div>
										<div class="tab_panel_content">
											<div class="tab_panel_text">
											 <div class="row fill_height">

												<!-- Contact Form -->
							
													<div class="contact_form col-lg-12"  >
														
													<div id="contenedor"  >
														<div id="caja-chat" class>
															<div id="chat" class="comment_textarea col-lg-12" ></div>
														</div>

														
													</div>


													</div>
					

												</div>
											</div>
										</div>
									</div>
								</div>

								<form method="POST" action="mensajeria.php?materia=<?php echo $materia_chat;?>">
									
									<textarea name="mensaje" class="comment_input" placeholder="Ingresa tu mensaje"></textarea>
									<input class="comment_button trans_200" type="submit" name="enviar" value="Enviar">
								</form>

								<?php
									if (isset($_POST['enviar'])) {
										
										$nombre = $a['Nombre'];
										$mensaje = $_POST['mensaje'];


										$consulta = "INSERT INTO $usuario (nombre, mensaje, materia) VALUES ('$nombre', '$mensaje', '$materia_chat')";

										$ejecutar = $conexion->query($consulta);

										if ($ejecutar) {
											echo "<audio src='beep.mp3' hidden='true' autoplay='true'>";
										}
									}

								?>
								

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
							
							<?php
								$codigo1 = "
								<li><a href='temas/Segunda Guerra Mundial/'>Segunda Guerra Mundial</a></li>
								<li><a href='temas/Una Paz Ficticia/'>Una Paz Ficticia</a></li>
								<li><a href='#'>Capitalismo y Socialismo</a></li>
								<li><a href='#'>Descolonización y 3° Mundo</a></li>
								<li><a href='#'>Mundo en Crisis 1973-1990</a></li>
								<li><a href='#'>LatinoAmérica Pos 2°da Guerra M</a></li>
								<li><a href='#'>El Nuevo Orden Mundial</a></li>
								<li><a href='#'>Los Derechos Humanos</a></li>";
								$codigo2 = "
								<li><a href='#'>Segunda Guerra Mundial</a></li>
								<li><a href='#'>Una Paz Ficticia</a></li>
								<li><a href='#'>Capitalismo y Socialismo</a></li>
								<li><a href='#'>Descolonización y 3° Mundo</a></li>
								<li><a href='#'>Mundo en Crisis 1973-1990</a></li>
								<li><a href='#'>LatinoAmérica Pos 2°da Guerra M</a></li>
								<li><a href='#'>El Nuevo Orden Mundial</a></li>
								<li><a href='#'>Los Derechos Humanos</a></li>
								<div class='course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start'
								<div class='course_info_item'>
								
								<div class='course_info_title'>Aún no tienes acceso a este curso, Súmate HOY a nuestro equipo y aprende sin parar!! </div>
							</div>
								</div>";
									
                                   
							// Establecemos contenido segun codigo de pago
							
							
							// muestra_segun_pago($codigo1, $codigo2);

							
							?>
							
							
							
							
							
								</ul>
							</div>
						</div>
					
						
					

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Courses -->
    
	

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="./images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">Plataforma de Estudio 2019</div>
							<div class="newsletter_subtitle">Estudia que es conocimiento no ocupa Lugar..</div>
						</div>

						<!-- Newsletter Form -->
						

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<?php include_once "includes/footer.php"; ?>
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
<script src="js/course.js"></script>





<!-- <script lenguage="javascript">


	
let xhr = new XMLHttpRequest();

//creamos peticion al servidor
xhr.open('GET','./	video.mp4');

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



</script> -->
</body>
</html>
