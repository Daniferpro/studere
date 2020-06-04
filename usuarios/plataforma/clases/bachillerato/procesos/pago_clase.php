<?php
include_once "../../../../../includes/seguro.php";
include_once "../../../../../includes/conectar.php";
include "../conn/conecciones.php";
include_once "../../../includes/coneccionbdclases.php";

$id=$_GET['ref'];

$hola=$_SESSION['email'];
$query="SELECT * FROM usuario WHERE email='$hola' ";
$consulta=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta);
$alumno = $a['Nombre'].$a['Apellido']." ".$a['Email'];

$clase = $_GET['id'];
$materia = $_GET['materia'];

$profe = consultarSQL("SELECT * FROM usuario WHERE materias='$materia'");
$profe = mysqli_fetch_assoc($profe);

// $query2="SELECT * FROM clases WHERE Alumno='$alumno' AND Nombre_clase='$clase'";
// $consulta3=consultarSQL($query2);
// $b=mysqli_fetch_assoc($consulta3);

 
$query3="SELECT * FROM $materia WHERE Nombre='$clase'";
$consulta1=gruposSQL($query3);
$clases = mysqli_fetch_assoc($consulta1);


require_once '../conn/conn.php';    
require __DIR__  . '../../../../../../vendor/autoload.php';


// MercadoPago\SDK::setClientId("6168214163550142");
// MercadoPago\SDK::setClientSecret("q23K4fKeC7wE8poxp1B05aUuiqTsbhJJ");
MercadoPago\SDK::setAccessToken("APP_USR-6168214163550142-061000-8fdabbe8a7c255dcb03cd24cfabeb2b7-190894637");
MercadoPago\SDK::setPublicKey("APP_USR-812c544c-9c4d-4cd9-81e2-33d73f8d6f28");

$preference = new MercadoPago\Preference();

  $produto = [$clase, 1, $clases['Precio'], $id];

  $item2 = new MercadoPago\Item();
  $item2->currency_id = "UYU";
  $item2->id = $produto[3];
  $item2->collection_id = $produto[3];
  $item2->title = $produto[0]." ".$materia; 
  $item2->quantity = $produto[1];
  $item2->unit_price = str_replace(',', '.', $produto[2]);
  $item2->collection_id = $id;
  $item2->picture_url = "https://studere.uy/usuarios/plataforma/images/images/logo4.png";
  $item2->description = "Studere Platform Tacuarembó Uruguay";
  

  
  $payer = new MercadoPago\Payer();
  $payer->email = $hola;
  $payer->name = $a['Nombre']." ".$a['Apellido'];
  

  # url de retorno segun resultado de la compra
  $preference->back_urls = array(
    "success" => "localhost/usuarios/plataforma/clases/bachillerato/procesos/actualizaciondatos.php?aprovado",
    "failure" => "localhost/usuarios/plataforma/clases/bachillerato/procesos/actualizaciondatos.php?fallo",
    "pending" => "localhost/usuarios/plataforma/clases/bachillerato/procesos/actualizaciondatos.php?pendiente"
);


  $preference->external_reference = $id;
  $preference->items = array($item2);
  $preference->payer = $payer;
  $preference->save(); # Save the preference and send the HTTP Request to create
  

  
  
 



// Iniciar busca

$query = mysqli_query($conn,"SELECT  * FROM fatura WHERE ref='$id' LIMIT 1");
$fat   = mysqli_fetch_assoc($query);

  



//actualizar datos en base de datos actualizando los permisos del usuario
   $fecha_inicio= date("Y-m-d"); //fecha de hoy
       $fecha_fin = strtotime ( '+10 day' , strtotime ( $fecha_inicio ) ) ;
   $fecha_fin = date ( 'j-m-Y' , $fecha_fin );



//  if($consulta3->num_rows>=1){
//      if($b['estado'] == "vencido"){
//         // if(!empty($_POST['nombre'])){

//             $clasenueva=$clase;
//             $profesor=$clases['profesor'];
//             $año="4°to año bd";
//             $fecha_inicio= date("Y-m-d");
//             $fecha_fin = strtotime ( '+30 day' , strtotime ( $fecha_inicio ) ) ;
//             $fecha_fin = date ( 'Y-m-j' , $fecha_fin );
//             $alumno = $a['Nombre'].$a['Apellido']." ".$a['Email'];
//             $materia_nueva=$materia;    

//             $borrar="DELETE FROM clases WHERE id='$_GET[id2]'";
//             consultarSQL($borrar);    
//             $permisonuevo="INSERT INTO clases (Nombre_clase, Profesor, Año, fecha_inicio, fecha_fin, Alumno, materia, estado)
//             VALUES ('$clasenueva', '$profesor', '$año', '$fecha_inicio', '$fecha_fin', '$alumno', '$materia_nueva', 'activo')";
//             consultarSQL($permisonuevo);
            


//         }else{echo "<script language='JavaScript'> alert ('Completa el Formulario de datos'); </script>";}
//     }// }

 
//    if($consulta3->num_rows==0){
//     //    if(empty($_POST['nombre'])){
       
//         $clasenueva=$clase;
//         $profesor=$clases['profesor'];
//         $año="4°to año bd";
//         $fecha_inicio= date("Y-m-d");
//         $fecha_fin = strtotime ( '+30 day' , strtotime ( $fecha_inicio ) ) ;
//         $fecha_fin = date ( 'Y-m-j' , $fecha_fin );
//         $alumno = $a['Nombre'].$a['Apellido']." ".$a['Email'];
//         $materia_nueva=$materia;

//         $permisonuevo="INSERT INTO clases (Nombre_clase, Profesor, Año, fecha_inicio, fecha_fin, Alumno, materia, estado)
//         VALUES ('$clasenueva', '$profesor', '$año', '$fecha_inicio', '$fecha_fin', '$alumno', '$materia_nueva', 'activo')";
//         consultarSQL($permisonuevo);

//         $pago_nuevo="UPDATE usuario SET pago='1' WHERE Email='$hola'";
//         consultarSQL($pago_nuevo);

//         //obtenemos la cantidad de alumnos actuales de esa clase/materia y sumamamos 1.
//         $consulta3="SELECT * FROM $materia WHERE Nombre_clase='$clase_nueva'";
//         $ii=consultar3SQL($consulta3);
//         $resultado3=mysqli_fetch_assoc($ii);
//         $cantidad_alumnos_actuales=$resultado3['alumnos'];
//         $cantidad_alumnos_modificar=$cantidad_alumnos_actuales+1;
//         //sumamos un alumno.
//         $consulta3_1="UPDATE $materia SET alumnos='$cantidad_alumnos_modificar' WHERE nombre_clase='$clase' ";
//         consultar3SQL($consulta3_1);
        


//     }else{echo "<script language='JavaScript'> alert ('Completa el Formulario de datos'); </script>";}

    // }
    
    
  
       
     
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Obtiene ésta Clase!!!</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../../../styles/bootstrap4/bootstrap.min.css">
<link href="../../../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../../plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../../../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../../../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../../../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../../../styles/courses.css">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  -->

<link rel="stylesheet" type="text/css" href="../../../styles/courses_responsive.css">
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
								
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
        



<!-- Header Content -->
<div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <a href="../index.php">
                                <div class="logo_text">Alumno <span><?php   echo $a['Nombre']; ?></span></div>
                            </a>
                        </div>
                        <nav class="main_nav_contaner ml-auto">
                            <ul class="main_nav">
                                
                                <li class="active"><a href="../../../">Inicio</a></li>
                                <li><a href="../../../miscursos.php">Mis Cursos</a></li>
                                <li><a href="../../../perfil.php">Editar Perfil</a></li>
                                <li><div class="top_bar_login ml-auto">
                                <a href="../../../logout.php?tk=<?php echo $_SESSION['token']?>">Cerrar Sesion</a></div>
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
                <div class="col" >
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
            <input type="search" class="search_input menu_mm" placeholder="Buscar" required="required">
            <button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
                <i class="fa fa-search menu_mm" aria-hidden="true"></i>
            </button>
        </form>
    </div>
    
    <nav class="menu_nav">
        
        <ul class="menu_mm">
            <li class="menu_mm"><a href="../../../">Inicio</a></li>
            <li class="menu_mm"><a href="../../../miscursos.php">Mis Cursos</a></li>
            <li class="menu_mm"><a href="../../../perfil.php">Editar Perfil</a></li>
            
            <li class="menu_mm"><a href="../../../logout.php?tk=<?php echo $_SESSION['token']?>">Cerrar Sesión</a></li>
        </ul>
        
        <div></div>

    </nav>
</div>



	<!-- Home -->

	

	<!-- Courses -->
    <br> <br> <br>
	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<!--  -->
					<div class="courses_container">
						<div class="row courses_row">
							
							<!-- Course -->
							<div class="col-lg-10 course_col">
								<div class="course">
									
									<div class="course_body">
										<h3 class="course_title"><a href="#"><?php echo "$clase";  ?></a></h3>
										<div class="course_teacher">Profesor: <?php echo $profe['Nombre']." ".$profe['Apellido'];?></div>
										<div class="course_text">
											<p>Estas por comprar esta clase con fecha desde: <?php echo $fecha_inicio." ";?> Hasta el dia: <?php # " ".$fecha_fin;?></p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span><?php # echo  $clases['alumnos'];?></span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 estrellas</span>
											</div>
                                            <div class="course_price ml-auto" > Promo Lanzamiento ! <div style="color: green;"><span>Normal $<?php echo $clases['Precio'] + 499;?></span>$<?php echo $clases['Precio'];?></div></div>
                                            
                                        </div>
                                        <div class="course_image"><img src="../../../images/course_3.jpg"  alt=""></div>
									</div>
								</div>
							</div>


						</div>
						
					</div>
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar course">

						<!-- Categories -->
						<div class="sidebar">
                        <br>
							<div class="sidebar_section_title">Obtiene tu clase!</div>
							<div class="course_footer">
                            <br><br>
                            <div class="col-lg-1 text-right">
                            <!-- <a class="btn btn-success" href="#">Finalizar</a> -->
                            <div class="container-login100-form-btn p-t-10">
    <?php 
                       echo "<a class='btn btn-success' href='$preference->sandbox_init_point '>Comprar Clase</a>";
                        ?>
							
</div>
                            </div>

                            <!-- <form class="login100-form validate-form" action="#" method="POST">
					

					
					
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Nombre requerido">
						<input class="input100" type="text" name="nombre" placeholder="Nombre">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Apellido requerido">
						<input class="input100" type="text" name="apellido" placeholder="apellido">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Celular requerido">
						<input class="input100" type="int" name="celular" placeholder="Numeo de tarjeta" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-10" >
						<input class="input100" type="password" name="contraseña1" placeholder="Pin">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					
					</div>
					
					
					<div class="container-login100-form-btn p-t-10">
						<input class="login100-form-btn" action="pago_clase.php" type="submit" value="Comprar">
							
						
									</form> -->

                            </div>
                        </div>
                        <div class="course_tittle">
                            <p>
                                <h3><?php # if($b['estado'] == "activo"){ echo "¡ Clase Adquirida Disfurta de tu formación hasta la fecha $b[fecha_fin] !";}elseif($b['estado'] == "vencido"){echo "Esta clase esta Vencida! Actualiza el pago para Reactivarla!";}else{echo "Continuar con el Pago";} ?></h3>
                            </p>
                        </div>
                        <!-- <div class="course_tittle">
                            <p>
                                <h5>Te dejamos La tarjeta para Poder Comprar !</h5>
                                <br>
                                <li>Ésta Tarjeta Es Ficticia</li>
                                <li>No Posee Dinero Real </li>
                                <li>Solo está habilitada para su uso aquí</li>
                                <br>
                                <ul>
                                <li>TARJETA OCA</li>
                                <li>Número: 5429 9173 0821 2254</li>
                                <li>Nombre: TU NOMBRE</li>
                                <li>C.I.: TU CEDULA</li>
                                <li>Vence: 21/21</li>
                                <li>Código: 123</li>
                                <li>E-mail: Tu E-Mail</li>
                                <br>
                                <li><button class="btn"> Copiar N° Tarjeta</button></li>
                                <br>
                                </ul>
                            </p>
                        </div> -->
                        

    <!-- 2. Include library -->
    <script src="../../../js/clipboard/dist/clipboard.min.js"></script>

    <!-- 3. Instantiate clipboard -->
    <script>
    var clipboard = new ClipboardJS('.btn', {
        text: function() {
            return '5429 9173 0821 2254';
        }
    });

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
					
					</div>
				</div>
			</div>
		</div>
	</div>


    

	<!-- Footer -->

	<footer class="footer">
    <!-- incluimos el footer desde includes  -->
    <?php  include_once "../../../includes/footer.php";?>

	</footer>
</div>

<script src="../../../js/jquery-3.2.1.min.js"></script>
<script src="../../../styles/bootstrap4/popper.js"></script>
<script src="../../../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../../../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../../../plugins/easing/easing.js"></script>
<script src="../../../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../../../plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="../../../js/courses.js"></script>
<script src="../../../js/blog.js"></script>

</body>
</html>