<?php 
include_once "../../../../../../../../includes/seguro.php";
include_once "../../../../../../../../includes/conectar.php";
include_once "../../../../../../includes/coneccionbdclases.php";
//asignacion de datos a la variable $datos.
$query="SELECT * FROM historia";
$consulta=consultar3SQL($query);
$datos = mysqli_fetch_assoc($consulta);

$hola=$_SESSION['email'];

//asignacion de datos a la variable $a.
$query="SELECT * FROM usuario WHERE email='$hola' ";
$consulta2=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta2)
?>


<!DOCTYPE html>
<html lang="es">
<head>
<title>Consecuencias Segunda guerra Mundial</title>
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
<link rel="stylesheet" type="text/css" href="../../../../../../styles/courses.css">
<link rel="stylesheet" type="text/css" href="../../../../../../styles/courses_responsive.css">
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
								<li><div class="question"> <?php if($a['pago'] >= 1){ echo "Tus Clases :"." ".$a['materias'];}else{echo "Aún no te has registrado en  ninguna clase o curso";} ?> </div></li>
									
									
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div><?php echo $a['Email'];?></div>
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
								<!-- VALORACION Y VALANCE [VIDEO PRESENTACIÓN DEL TEMA] -->
								<div class="accordion d-flex flex-row align-items-center"><div> [ Video Presentación ] </div></div>
								<div class="accordion_panel">
								
									<br>
									<div class="col-lg-10">
									<div class="course_video course_image">
										<video id="video" width="100%" controls  preload="auto"></div>
																		
										<p><h4>Balance y Valoración de las Consecuencaias de la 2°da Guerra Mundial</h4>
													El Balance de la Segunda Guerra Mundial no puede ser más siniestro. La Guerra tuvo
													como consecuencias importantes pérdidas demográficas y económicas, así como
													cambios políticos y territoriales. El nivel de destrucción alcanzado y la crueldad
													demostrada en los bombardeos masivos y en los campos de concentración provocaron
													una quiebra moral que ha marcado profundamente la conciencia de varias
													generaciones europeas.
													Esta guerra tuvo un conjunto de características, en la cual, los tanques, los aviones, los
													submarinos y portaaviones pasaron a ser los protagonistas de la Guerra.
													En este conflicto se vieron implicados numerosos Estados, como beligerantes directos
													o como colaboradores y aliados. Por este motivo, se desarrolló en varios escenarios
													bélicos simultáneos: el continente europeo, los desiertos africanos, las aguas del
													Pacífico y del Atlántico Norte, y los cielos de las ciudades europeas que continuaron
													siendo sorprendidos con mortíferos raids de la aviación de uno y de otro bando.
													Toda la población de los países beligerantes se vio involucrada, tanto por su papel de
													víctima, como por la fuerza activa en el conflicto. Por primera vez en la historia, la
													población civil fue masacrada como una forma de guerra psicológica destinada a minar
													la moral de las defensas enemigas.
													Por otro lado, la población participó en la guerra, en las zonas ocupadas, a través de la
													resistencia, y en las zonas libres con una impresionante movilización femenina, que se
													hizo cargo de la industria de guerra y de la organización de los servicios de retaguardia,
													al igual que en la Primera Guerra Mundial.
													Los contendientes hubieron de emplear la totalidad de sus recursos materiales e
													intelectuales para lograr la victoria.
													La Guerra también se desarrolló como guerra económica, porque los Estados
													subordinaron todo el sistema económico a los intereses militares, ya que la fabricación
													de armas era vital para la victoria final, y porque todo tipo de complejos energéticos,
													industriales e infraestructurales viarias se convirtieron en objetivos militares
													prioritarios.
													Además, hubo también una guerra científica, al vincularse los éxitos militares a los
													progresos de las investigaciones científicas.
													Y, por último, no podemos olvidar la guerra ideológica que se desarrolló en la prensa,
													en la radio o en las mismas pantallas del cine, donde la propaganda manipulaba los
													sentimientos patrióticos de los ciudadanos.
											

										</p>
									
									</div>
										<br>
										
								</div>
										
                                        
									</div> <br>
								</div> 
								<!-- IMPACTO DEMOGRÁFICO -->
								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Sub Tema 1</div></div>
									<div class="accordion_panel">

                                       
                                        <div class="col-lg-10">
					                    	
											
											<p><h4>El Impacto Demográfico</h4>
													
												El número de víctimas de la Segunda Guerra Mundial, muy superior al de la Primera
												Guerra, se sitúa en torno a los 56 millones, en su mayoría registrado en Europa

												oriental. Los países aliados perdieron unos 45 millones de personas, mientras que la
												cifra estimada en los países del Eje fue de 11 millones de bajas.
												Las causas fueron bombardeos masivos en las ciudades, represalias, desnutrición,
												enfermedades o incluso operaciones de exterminio sistemático. Estados Unidos
												prácticamente no tuvo víctimas civiles, ya que en Norteamérica no se desarrolló
												ninguna batalla.
												Además de las víctimas de las batallas, en esta guerra hubo miles de muertos en los
												campos de concentración y exterminio, como Auschwitz, Mauthausen, Buchenwald o
												Treblinka, construidos por los nazis antes del comienzo de la guerra, y donde fueron
												encerrados sus enemigos políticos (comunistas, prisioneros de guerra) y población de
												razas consideradas inferiores, como los gitanos y los judíos. Los prisioneros debían
												trabajar duramente y muchos de ellos murieron, a causa del agotamiento, el hambre y
												las enfermedades.
												En 1942, en la Conferencia de Wansee, los Nazis decidieron la solución final, es decir,
												el exterminio de todos los judíos. Los judíos fueron llevados a los campos de
												exterminio, donde les esperaban los trabajos forzados o la cámara de gas. De los diez
												millones de personas que murieron en los campos nazis, unos seis millones fueron
												judíos.

											</p>
										
										</div>
											
											
									</div>
										
                                        
									</div> <br>
								</div> 
								
								<!-- LAS REERCICIONES ECONOMICAS -->
								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Sub Tema 2</div></div>
									<div class="accordion_panel">
									<div class="col-lg-10" >
										
									</div>
										<p> <h4>Las Reperciciones Económicas</h4>
											La Guerra agravó la decadencia económica de Europa, mientras que fortaleció la
											economía norteamericana. Numerosas ciudades, como Dresde, Varsovia, Stalingrado,
											Tokio o las ya mencionadas Hiroshima y Nagasaki, quedaron arrasadas. Los
											bombardeos masivos colapsaron las comunicaciones y destruyeron los complejos
											industriales. La falta de vivienda y de alimentos se convirtió en un acuciante problema
											para amplios sectores de la población. La aparición del mercado negro empeoró las
											cosas, provocando una grave inflación.
											Por su parte, EE.UU no solo había logrado salir de la Gran Depresión, sino que su
											economía estaba en un momento óptimo: su producto nacional bruto se había
											duplicado desde 1939, controlaba las dos terceras partes de las reservas mundiales de
											oro, abastecía de productos industriales a todo el mundo y consiguió crear un marco
											de libre cambio para las relaciones comerciales internacionales, lo que le permitió
											atender a las necesidades de la reconstrucción europea, con ayudas y préstamos, y
											ejercer una cómoda hegemonía durante toda la posguerra.
										</p>
								</div>
								</div> 
								<br>
								<!-- ACUERDO SPOLITICOS Y CAMBIOS TERRITORIALES -->
								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Sub Tema 3</div></div>
									<div class="accordion_panel">
									<div class="col-lg-10" >
										</div>
										<p><h4>Los Acuerdos políticos y los cambios territoriales</h4>
										
											Desde que la Guerra comenzó a cambiar de signo a favor de los aliados, EE.UU, la
											Unión Soviética y El Reino Unido dieron inicio a una serie de conferencias de para
											definir las condiciones de paz.
											En enero de 1943, se celebró la Conferencia de Casablanca, donde los aliados
											decidieron que solo aceptarían de Alemania, Italia y Japón su rendición incondicional.

											En la Conferencia de Teherán, en diciembre de 1943, se reunieron Winston Churchill,
											José Stalin y Franklin Delano Roosevelt y discutieron sobre la desmilitarización de
											Alemania una vez acabada la guerra.
											En febrero de 1945, acordaron en la conferencia de Yalta el desarme y la división de
											Alemania en cuatro zonas, cada una de ellas ocupada por uno de los países aliados:
											Reino Unido, La URSS, EE.UU y Francia.
											En la conferencia de Potsdam, en julio de 1945, reunidos Stalin, Harry Truman y W.
											Churchill modificaron la frontera Polaca.
											La Ciudad de Berlín fue dividida en cuatro zonas y repartida, tal como se había hecho
											con Alemania. Austria se mantuvo ocupada por los aliados hasta la firma de su tratado
											de paz en 195.
											Una de las consecuencias inmediatas de las modificaciones de las fronteras entre los
											Estados fue el desplazamiento masivo de millones de personas, como fue el caso de
											polacos y soviéticos, o los que volvían a sus lugares de origen tras la guerra. Al perder
											la guerra muchos alemanes se vieron obligados a desplazarse o fueron expulsados de
											los países que habían conquistado.
											También se decidió la detención y el juicio de los criminales de guerra, que se llevaron
											a cabo, desde noviembre de 1945, en el proceso de Núremberg, el primero de estas
											características de la historia. Los cargos de los 23 acusados fueron: conspiración contra
											la paz, crímenes de guerra y genocidios o crímenes contra la humanidad.
											En 1947 se firmó el tratado de paz entre las potencias vencedoras de la guerra e Italia,
											Rumania, Bulgaria, Hungría y Finlandia, y en 1951, de los vencedores (excepto la URSS)
											con Japón, que perdió todas las conquistas que había realizado.
											Durante las Conferencias de Yalta y Potsdam surgieron las primeras diferencias entre
											EE.UU y la URSS, sobre todo respecto a la reconstrucción de la Europa del Este. Las
											diferencias se acentuaron hasta provocar la división de Europa en dos áreas sometidas
											a la influencia de las dos nuevas superpotencias.
										</p>	</div>
								</div>

								<br><h2 class="  counter_title"> Material de Estudio  </h2><br>
								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div> Material de Estudio</div></div>
									<div class="accordion_panel">
									<tr>
										<h5>Tengo Dudas sobre el tema ¿Que Hago?</h5><br>
										<li>Tenga en Cuenta que puede aclarar dudas en la <a href="../../../../procesos/vconf.php?materia=historia">VideoConferencia	</a> con el Profesor</li>
										<li>También puede hacerlo atravez del chat directo (le responderán en el correr del día)</li> 
									</tr>
									<br>
									<tr>
										<h5>A continuación le dejamos el link con este material de estudio</h5> <br>
										<li><a href="#">Material de Estudio</a></li>
									</tr>
									</div>
								</div>

								<br><h2 class="  counter_title"> Ejercicios  </h2><br>
								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div><h5>Prueba de Conocimientos</h5></div></div>
									<div class="accordion_panel">
									<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfAsYePtX2Hu_l4cW6L_MduKi4tKnpXyT7PGyRNeOtIYBO_nQ/viewform?embedded=true" width="100%" height="2052" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>									
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
							<div class="team_title"><a href="#">Rogelio Castro</a></div>
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
							<div class="team_title"><a href="#">Adriana Nicodella</a></div>
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
<script src="./js/video1.js"></script>
<script src="./js/video.js"></script>








</body>
</html>