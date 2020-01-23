

<html>

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
				<li class="menu_mm"><a href="index.php">Inicio</a></li>
				
				<li class="menu_mm"><a href="miscursos.php">Mis Cursos</a></li>
				<li class="menu_mm"><a href="perfil.php">Editar Perfil</a></li>
				
				<li class="menu_mm"><a href="../../logout.php?tk=<?php echo $_SESSION['token']?>">Cerrar Sesión</a></li>
			</ul>
			
			<div></div>

		</nav>
	</div>
	

</html>