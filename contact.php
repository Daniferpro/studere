<?php

if(isset($_POST) && !empty($_POST)){
	include_once "./mail/PHPMailer.php";
	include_once "./mail/Exception.php";
	include_once "./mail/OAuth.php";
	include_once "./mail/SMTP.php";

	


//obtenemos los daos del usuario :
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$departamento = $_POST['dep'];
$asignatura = $_POST['asignatura'];
$mensaje = $_POST['mensaje'];

$admins = array('daniferpro3@gmail.com' , 'studereplataforma@gmail.com');

#Primer Email es enviado a la lista de admins
for ($i=0; $i <= count($admins)-1; $i++) { 
	# code...


$destinatario = filter_var($admins[$i], FILTER_SANITIZE_EMAIL);
$mensajeFinal = "El Profesor ".$nombre." esta interesado en enseñar en el equipo, Pónte en contacto con él EMAIL :: ". $email." Departamento:: ". $departamento. " Asignatura:: ". $asignatura. " Mensaje Personal::  ". $mensaje;


$texto =  $mensaje = "";
$mailAdmin = new PHPMailer\PHPMailer\PHPMailer();
$mailAdmin->isSMTP();
$mailAdmin->SMTPDebug = 0;
$mailAdmin->Host = 'smtp.gmail.com';
$mailAdmin->Port = 465;
$mailAdmin->SMTPSecure = 'ssl';
$mailAdmin->SMTPAuth = true;
$mailAdmin->Username = "daniferpro3@gmail.com";
$mailAdmin->Password = "daniferpro2016";
$mailAdmin->setFrom('daniferpro3@gmail.com','Studere.uy');
$mailAdmin->addAddress($destinatario);
$mailAdmin->Subject = "Un profesor Quiere informacion!";
$mailAdmin->Body = $mensajeFinal;
$mailAdmin->isHTML(false);
$mailAdmin->send();
	}

#segundo email es enviado al profesor


$destinatario = filter_var($email, FILTER_SANITIZE_EMAIL);
$mensajeFinal = ' <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="width:100%;font-family:"open sans", "helvetica neue", helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;">
 <head> 
  <meta charset="UTF-8"> 
  <meta content="width=device-width, initial-scale=1" name="viewport"> 
  <meta name="x-apple-disable-message-reformatting"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta content="telephone=no" name="format-detection"> 
  <title>Studere.uy </title> 
  <!--[if (mso 16)]>
	<style type="text/css">
	a {text-decoration: none;}
	</style>
	<![endif]--> 
  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
  <!--[if !mso]><!-- --> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> 
  <!--<![endif]--> 
  <style type="text/css">
@media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:16px!important; line-height:150%!important } h1 { font-size:30px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:center; line-height:120%!important } h3 { font-size:20px!important; text-align:center; line-height:120%!important } h1 a { font-size:30px!important } h2 a { font-size:26px!important } h3 a { font-size:20px!important } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:16px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button { font-size:20px!important; display:inline-block!important; border-width:15px 25px 15px 25px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } .es-desk-hidden { display:table-row!important; width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } .es-desk-menu-hidden { display:table-cell!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
#outlook a {
	padding:0;
}
.ExternalClass {
	width:100%;
}
.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
	line-height:100%;
}
.es-button {
	mso-style-priority:100!important;
	text-decoration:none!important;
}
a[x-apple-data-detectors] {
	color:inherit!important;
	text-decoration:none!important;
	font-size:inherit!important;
	font-family:inherit!important;
	font-weight:inherit!important;
	line-height:inherit!important;
}
.es-desk-hidden {
	display:none;
	float:left;
	overflow:hidden;
	width:0;
	max-height:0;
	line-height:0;
	mso-hide:all;
}
</style> 
 </head>
 <body style="width:100%;font-family:"open sans", "helvetica neue", helvetica, arial, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;"> 
  <div class="es-wrapper-color" style="background-color:#F6F6F6;"> 
   <!--[if gte mso 9]>
			<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
				<v:fill type="tile" color="#f6f6f6"></v:fill>
			</v:background>
		<![endif]--> 
   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top;"> 
	 <tr style="border-collapse:collapse;"> 
	  <td valign="top" style="padding:0;Margin:0;"> 
	   <table class="es-header" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top;"> 
		 <tr style="border-collapse:collapse;"> 
		  <td style="padding:0;Margin:0;background-image:url(https://i.ibb.co/qjyfBVh/fondo.jpg);background-position:center top;background-repeat:no-repeat;background-size:cover;" bgcolor="#3d4c6b" align="center" background="./images/9701519718227204.jpg"> 
		   <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;" width="640" cellspacing="0" cellpadding="0" align="center"> 
			 <tr style="border-collapse:collapse;"> 
			  <td align="left" style="padding:0;Margin:0;padding-top:10px;padding-left:20px;padding-right:20px;"> 
			   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
				 <tr style="border-collapse:collapse;"> 
				  <td width="600" valign="top" align="center" style="padding:0;Margin:0;"> 
				   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
					 <tr style="border-collapse:collapse;"> 
					  <td align="center" style="padding:0;Margin:0;padding-top:10px;"><img class="adapt-img" src="https://i.ibb.co/0ZmrqHS/cabecera.png" alt="Newsletter article #1" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;border-radius:3px 3px 0px 0px;" title="logo studere.uy" width="520"></td> 
					 </tr> 
				   </table></td> 
				 </tr> 
			   </table></td> 
			 </tr> 
		   </table></td> 
		 </tr> 
	   </table> 
	   <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
		 <tr style="border-collapse:collapse;"> 
		  <td align="center" style="padding:0;Margin:0;"> 
		   <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;" width="640" cellspacing="0" cellpadding="0" align="center"> 
			 <tr style="border-collapse:collapse;"> 
			  <td align="left" style="padding:0;Margin:0;padding-left:20px;padding-right:20px;"> 
			   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
				 <tr style="border-collapse:collapse;"> 
				  <td width="600" valign="top" align="center" style="padding:0;Margin:0;"> 
				   <table style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;border-radius:3px;background-color:#FFFFFF;" width="100%" cellspacing="0" cellpadding="0" bgcolor="#ffffff"> 
					 <tr style="border-collapse:collapse;"> 
					  <td align="center" style="Margin:0;padding-bottom:5px;padding-left:20px;padding-right:20px;padding-top:25px;"><h2 style="Margin:0;line-height:34px;mso-line-height-rule:exactly;font-family:"open sans", "helvetica neue", helvetica, arial, sans-serif;font-size:28px;font-style:normal;font-weight:bold;color:#444444;">Bienvenido/a al Mundo Studere</h2></td> 
					 </tr> 
					 <tr style="border-collapse:collapse;"> 
					  <td align="center" style="Margin:0;padding-top:10px;padding-bottom:15px;padding-left:20px;padding-right:20px;"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:"open sans", "helvetica neue", helvetica, arial, sans-serif;line-height:24px;color:#999999;"><span class="product-description">Gracias por Comunicarse Con Nuestro equipo!</span></p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:"open sans", "helvetica neue", helvetica, arial, sans-serif;line-height:24px;color:#999999;"><span class="product-description">Nos Pondremos en contacto con Usted lo antes posible para brindarle más detalles sobre como preparar el material para estudiar, como grabar, edicion, filtrado de informacion y Margen de Ganancias</span></p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:"open sans", "helvetica neue", helvetica, arial, sans-serif;line-height:24px;color:#999999;"><br></p></td> 
					 </tr> 
					 <tr style="border-collapse:collapse;"> 
					  <td align="center" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:15px;padding-bottom:25px;"><span class="es-button-border" style="border-style:solid;border-color:#75B6C9;background:#3D85C6;border-width:1px;display:inline-block;border-radius:28px;width:auto;"><a href="http://www.studere.uy" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:"open sans", "helvetica neue", helvetica, arial, sans-serif;font-size:16px;color:#FFFFFF;border-style:solid;border-color:#3D85C6;border-width:15px 25px 15px 25px;display:inline-block;background:#3D85C6;border-radius:28px;font-weight:normal;font-style:normal;line-height:19px;width:auto;text-align:center;">Visitar Studere</a></span></td> 
					 </tr> 
				   </table></td> 
				 </tr> 
			   </table></td> 
			 </tr> 
		   </table></td> 
		 </tr> 
	   </table> 
	   <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;"> 
		 <tr style="border-collapse:collapse;"> 
		  <td align="center" style="padding:0;Margin:0;"> 
		   <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#F6F6F6;" width="640" cellspacing="0" cellpadding="0" bgcolor="#f6f6f6" align="center"> 
			 <tr style="border-collapse:collapse;"> 
			  <td align="left" style="padding:0;Margin:0;padding-top:10px;padding-left:20px;padding-right:20px;"> 
			   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
				 <tr style="border-collapse:collapse;"> 
				  <td width="600" valign="top" align="center" style="padding:0;Margin:0;"> 
				   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
					 <tr style="border-collapse:collapse;"> 
					  <td align="center" style="padding:0;Margin:0;padding-bottom:5px;"><img src="https://i.ibb.co/5Rx4xGp/logo.jpg" alt="Logo" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic;" title="Logo" width="75" class="adapt-img"></td> 
					 </tr> 
					 <tr style="border-collapse:collapse;"> 
					  <td align="center" style="padding:0;Margin:0;padding-top:15px;padding-bottom:15px;"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:"open sans", "helvetica neue", helvetica, arial, sans-serif;line-height:24px;color:#999999;">www.studere.uy</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:"open sans", "helvetica neue", helvetica, arial, sans-serif;line-height:24px;color:#999999;">Plataforma de estudios online Tacuarembo Uruguay 2019</p><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:16px;font-family:"open sans", "helvetica neue", helvetica, arial, sans-serif;line-height:24px;color:#999999;">studereplataforma@gmail.com Whatsapp 096 634 675</p></td> 
					 </tr> 
				   </table></td> 
				 </tr> 
				 <tr style="border-collapse:collapse;"> 
				  <td width="600" valign="top" align="center" style="padding:0;Margin:0;"> 
				   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
					 <tr style="border-collapse:collapse;"> 
					  <td align="center" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px;"> 
					   <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;"> 
						 <tr style="border-collapse:collapse;"> 
						  <td style="padding:0;Margin:0px;border-bottom:1px solid #F6F6F6;background:rgba(0, 0, 0, 0) none repeat scroll 0% 0%;height:1px;width:100%;margin:0px;"></td> 
						 </tr> 
					   </table></td> 
					 </tr> 
				   </table></td> 
				 </tr> 
			   </table></td> 
			 </tr> 
		   </table></td> 
		 </tr> 
	   </table></td> 
	 </tr> 
   </table> 
  </div>  
 </body>
</html>
';


$texto =  $mensaje = "";
$mailAdmin = new PHPMailer\PHPMailer\PHPMailer();
$mailAdmin->isSMTP();
$mailAdmin->SMTPDebug = 0;
$mailAdmin->Host = 'smtp.gmail.com';
$mailAdmin->Port = 465;
$mailAdmin->SMTPSecure = 'ssl';
$mailAdmin->SMTPAuth = true;
$mailAdmin->Username = "daniferpro3@gmail.com";
$mailAdmin->Password = "daniferpro2016";
$mailAdmin->setFrom('daniferpro3@gmail.com','Studere.uy');
$mailAdmin->addAddress($destinatario);
$mailAdmin->Subject = "Bienvenido/a al Mundo Studere!";
$mailAdmin->Body = $mensajeFinal;
$mailAdmin->isHTML(true);
#$mailAdmin->send(); lo colocamos al final para poder dar uso de un script en JS de notiicaciones como toastr.

}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Studere.uy</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Studere.uy es una plataforma de estudios online que intenta formar parte de la revolución tecnológica & educativa, Cualquier Persona puede acceder y estudiar al igual que en clase, pero en casa! Con la facilidad de estar en tu dispositivo, las 24 horas y en diferentes Formatos, como VideoPresentaciones, Archivos PDF, Presentaciones, Imágenes, VideoConferencias, Chats y Post.">
    <meta name="google-site-verification" content="TPFdPy8rc2VvmZT0JZCauuqixTlCU8l-qDYg_1gLRqo" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link rel="icon" type="image/ico" href="/images/favicon.ico" />
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- utilizamos la libreria de TOASTR para las notifiacicones -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<!-- <link rel="stylesheet" type="text/css" href="styles/main_styles.css"> -->
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
									<div class="login_button"><a href="./login.php">Iniciar sesión </a></div>
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
									<li><a href="./index.php">Inicio</a></li>
									<li><a href="#">Acerca de...</a></li>
									<li><a href="./cursos.php">Cursos</a></li>
									<li><a href="./usuarios/plataforma/estudiando/register.php?nuevo_registro">Registrarse</a></li>
									<li  class="active"><a href="#">Contacto</a></li>
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
								<input type="search" class="search_input" placeholder="Buscar en Studere..." required="required">
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
				<input type="search" class="search_input menu_mm" placeholder="Buscar cursos" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="./login">Iniciar Sesion</a></li>
				<li class="menu_mm"><a href="#">Acerca de</a></li>
				<li class="menu_mm"><a href="./cursos.php">Cursos</a></li>
				<li class="menu_mm"><a href="./usuarios/plataforma/estudiando/register.php?nuevo_registro">Registrarse!</a></li>
				<li class="menu_mm"><a href="#">Contacto</a></li>
			</ul>
		</nav>
	</div>
		<!-- Home -->

	<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Inicio</a></li>
								<li>Quiero Enseñar!</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Contact -->

	<div class="contact">
		
		<!-- Contact Map -->

		

		<!-- Contact Info -->

		<div class="contact_info_container">
			<div class="container">
				<div class="row">

					<!-- Contact Form -->
					<div class="col-lg-6">
						<div class="contact_form">
							<div class="contact_info_title">Formulario de Contcto</div>
							<form action="#" class="comment_form" method="POST" >
								<div>
									<div class="form_title">Nombre</div>
									<input type="text" class="comment_input" name="nombre" placeholder="Nombre y apellido" required="required">
								</div>
								<div>
									<div class="form_title">Email</div>
									<input type="text" class="comment_input" name="email" placeholder="ejemplo@studere.uy" required="required">
								</div>
								<div>
									<div class="form_title">Departamento</div>
									<select name="dep" id="counter_select" class="counter_input counter_options" required>
									<option value="null">Elije tu Departamento</option>
									<option value="Artigas">Artigas</option>
									<option value="Canelones" >Canelones</option>
									<option value="Colonia" >Colonia</option>
									<option value="Durazno" >Durazno</option>
									<option value="Flores" >Flores</option>
									<option value="Florida" >Florida</option>
									<option value="Lavalleja" >Lavalleja</option>
									<option value="Maldonado" >Maldonado</option>
									<option value="Montevideo" >Montevideo</option>
									<option value="Paysandu" >Paysandú</option>
									<option value="RioNegro" >Rio Negro</option>
									<option value="Rivera" >Rivera</option>
									<option value="Rocha" >Rocha</option>
									<option value="Soriano" >Soriano</option>
									<option value="Salto" >Salto</option>
									<option value="SanJosé" >SanJosé</option>
									<option value="Soriano" >Soriano</option>
									<option value="Tacuarembó" >Tacuarembó</option>
									<option value="Treinta y Tres" >Treinta y Tres</option>
									
									
									
									<option></option>
							</select>
								</div>
								<div>
									<div class="form_title">Asignatura</div>
									<input type="text" class="comment_input" name="asignatura" placeholder="Que asignatura enseñas?" required="required">
								</div>
								<div>
									<div class="form_title">Mensaje</div>
									<textarea class="comment_input comment_textarea"  name="mensaje" required="required"></textarea>
								</div>
								<div>
									<button type="submit" class="comment_button trans_200">Enviar</button>
								</div>
							</form>
						</div>
					</div>

					<!-- Contact Info -->
					<div class="col-lg-6">
						<div class="contact_info">
							<div class="contact_info_title">Nuestra Propuesta</div>
							<div class="contact_info_text">
							<p>Estamos sumando esfuerzos para poder construir una puerta a la educación. Nuestro objetivo es claro: Facilitar por medio de la tecnología 
								el estudio, logrando así que más personas puedan aprobar bachillerato. Independientemente si el usuario es un alumno actual de secundaria
								que toma la plataforma como herramienta como apoyo para apobar sus asignaturas, o si una persona que abandonó sus estudios y quiere terminar bachillerato.
								</p>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Herramientas Didácticas</div>
								<ul class="location_list">
								
								<li>El 90% de toda la información que llega a nuestro cerebro es de tipo visual y procesamos las imágenes hasta 60.000 veces más rápido
								 que cualquier texto. Afirman los estudios que retenemos un 10% de la información que oímos,
								 un 20% de la que leemos pero hasta un 80% de la que vemos.</li>
								 <li class="contact_info_location_title">Por éste motivo nos centramos en un contenido dinámico y variado:</li>
									<span class="contact_info_location_title">VideoPresentaciones:</span><li class="contact_info_location_title"> Videos didácticos Grabados por el Profesor</li>
									<span class="contact_info_location_title">VideoConferencias:</span><li class="contact_info_location_title">Para evacuar dudas y afirmar conocimientos, una forma más personal de llegar al usuario</li>
									<span class="contact_info_location_title">Multimedia</span><li class="contact_info_location_title">Imágenes,Archivos PDF, presentaciones, etc : todo el material en distintos formatos.y a gusto del usuario</li>
									<span class="contact_info_location_title">Post:</span><li class="contact_info_location_title"	>Cada clase o curso cuenta con un post, dónde los usuarios pueden compartir sus dudas ayudánose entre sí.</li>
									<span class="contact_info_location_title">Chat:</span><li class="contact_info_location_title"> Cada Usuario tiene la posibilidad de contactarse directamente con el Profesor, para una mejor tutoría y evacuar dudas.</li>
								</ul>
							</div>
							<div class="contact_info_location">
								<div class="contact_info_location_title">Información</div>
								<ul class="location_list">
									<li>Para obtener mas información, detalles y muestras, puedes escibirnos en el formulario.</li>
									<li>También puedes registrate para ver su funcionamiento</li>
									<li>Te dejamos más detalles en siguiente archivo pdf.</li>
									<li> <a download="Info para profesores" href="./info_profesor.pdf">Información Para Profesores.pdf (aun no se ha cargado el archivo pdf)</a> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	

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
                                            <p>Studere.uy plataforma de estudios online de secundaria Proteccion SSL Security conn</p>
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
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous">
	</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
<!--===============================================================================================-->	

<?php

	if($mailAdmin->send()):
		

?>
<!-- colocar scipt a ejecutar si se envia el email -->
<!-- toastr se ha enviado el mensaje -->
<script>

toastr.info('Hemos recibido correctamente el mensaje! Muchas Gracias por querer ser parte del Mundo Studere! Juntos Podemos Más', 'Felicitaciones!', {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-full-width",
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

<?php
endif;
?>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/marker_with_label/marker_with_label.js"></script>
<script src="js/contact.js"></script>
</body>
</html>