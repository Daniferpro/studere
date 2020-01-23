
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Plataforma</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->


</head>
<body>
<div class="limiter">

 

		
			
	
	

		<div class="container-login100" style="background-image: url('images/fondo.jpg');">
		<!-- <img src="images/usuarioprueba.jpg" alt="" width="100%" > -->
		<div>
		
		</div>
		<div class="container-login100-form-btn p-t-10">
				
					
					

					
					<div class="wrap-login100 p-t-40 p-b-90">
				<form class="login100-form validate-form" >
					
					<div class="text-left w-full">
					<h1 style="font-size: 70px">Studere Platform</h1>
					
					<h6 style="color: gray;"> Bienvenido! Te hemos invitado a formar parte de el equipo de pruebas de ésta Plataforma.</h6>
					<h6 style="color: gray;">Tendrás acceso full para poder probar la web y así dar tu opinión y ayudarnos a mejorar funciones
					y tu experiencia como usuario. Te recomendamos que veas el video de introducción a la Plataforma.</h6>
					<h6 style="color: gray;">Muchas gracias por tu tiempo</h6>
					
					</div>
					

					
					
				</form>
				<br> 
					<div class="text-left w-full">
					<h5 style="color: gray;">Daniel Ferreira.</h5>
					</div>
					<br>
				<a href="./index0.php">
					<button class="login100-form-btn"  action="./index0.php" type="submit" value="Acceder">Acceder</button>
					</a>
					<br>
					<a href="./video.php">
					<button class="login100-form-btn" action="./index0.php" type="submit" value="Acceder">Ver Video</button>
					</a>
			</div>
	
	
						
							
		</div>
		
		
									
			</div>
		</div>
	</div>
	
					
	





	
	



	 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	 <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<script type="text/javascript" >
	$(document).ready(function(){
		$("#mostrar").on( "click", function() {
			$('#target').show(2000); //muestro mediante id
			$('.target').show(); //muestro mediante clase
		 });
		$("#ocultar").on( "click", function() {
			$('#target').hide("linear"); //oculto mediante id
			$('.target').hide("slow"); //muestro mediante clase
		});
	}); 
</script>
    <script>

toastr.info('En éste sitio utilizamos cookies para mejorar tu experiencia como usuario, Puedes conocer más en la seccion Política de Privacidad y uso de cookies de nuestra plataforma ', 'Info:', {
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

</body>
</html>