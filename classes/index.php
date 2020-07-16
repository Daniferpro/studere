<?php
if(isset($_POST['email']) && isset($_POST['contraseña'])){

    if(!empty($_POST['email']) && !empty($_POST['contraseña'])){
      include_once "./includes/conecciones.php";
      include_once "./includes/login.php";
    }
  }
  


include_once 'includes/conecciones.php';
include_once 'includes/objetos.php';
if(!isset($_POST['email'])){
    include_once 'includes/seguridad.php';
}


if(isset($_SESSION['id'])){

    $Msj_hour = new Mensajes_plataforma;
    $Alumno = new Alumno($_SESSION['id']);
    if(isset($_SESSION['msg'])){
        if($_SESSION['msg'] == 2){
            $_SESSION['msg'] =  "visto";
        }
    }
}

  
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Studere.uy | classes </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="./bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="./dist/css/skins/_all-skins.min.css">
   
    
  <link rel="stylesheet" href="./plugins/pace/pace.min.css">
  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   
<script type="text/javascript">
		function Inicio(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('contenido_php').innerHTML = req.responseText;
					
				}
			}

			req.open('GET', 'contents/inicio.php', true);
			req.send();
		}
		
	</script>
    
<script type="text/javascript">
		function login(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('contenido_php').innerHTML = req.responseText;
					
				}
			}

			req.open('GET', 'contents/login_auth.php', true);
			req.send();
		}
		
	</script>


</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-blue layout-top-nav" <?php if(isset($_SESSION['id'])){ echo 'onload="Inicio();"';}else{ echo 'onload="login();"';} ?>>
    <div class="wrapper">

        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="../" class="navbar-brand"><b>Studere</b>.uy</a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
                    </div>
                    <?php 
                        if(isset($_SESSION['id'])):
                    ?>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li id="inicio_li"><a href="#" id="inicio" class="ajax">Inicio <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">Mis Cursos</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clases <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li id="ciclo_basico_li"><a href="#" id="ciclo_basico"  class="ajax">Ciclo Básico</a></li>
                                    <li id="bachillerato_li"><a href="#" id="bachillerato" class="ajax">Bachillerato</a></li>
                                    <li id="otros_li"><a href="#" id="otros" class="ajax">Otros</a></li>
                                    <li class="divider"></li>
                                    <li id="mis_compras_li"><a href="#" id="mis_compras" class="ajax">Mis Compras</a></li>
                                    <li class="divider"></li>
                                    <li id="nuestros_profesores_li"><a href="#" id="nuestros_profesores" class="ajax">Nuestros Profesores</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" id="navbar-search-input" placeholder="Buscar Cursos Nuevos"><i class=" form-control fa fa-search"></i>
                            </div>
                        </form>
                    </div>
                        <?php endif;?>
                    <!-- /.navbar-collapse -->
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Messages: style can be found in dropdown.less-->
                            <?php 
                                if(isset($_SESSION['id'])):
                            ?>
                            <li class="dropdown messages-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the messages -->
                                        <ul class="menu">
                                            <li>
                                                <!-- start message -->
                                                <a href="#">
                                                    <div class="pull-left">
                                                        <!-- User Image -->
                                                        <img src="./dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                                    </div>
                                                    <!-- Message title and timestamp -->
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <!-- The message -->
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                        </ul>
                                        <!-- /.menu -->
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                           
                            <li class="dropdown notifications-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <!-- Inner Menu: contains the notifications -->
                                        <ul class="menu">
                                            <li>
                                                <!-- start notification -->
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <!-- end notification -->
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                          
                            <li class="dropdown tasks-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <!-- Inner menu: contains the tasks -->
                                        <ul class="menu">
                                            <li>
                                                <!-- Task item -->
                                                <a href="#">
                                                    <!-- Task title and progress text -->
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <!-- The progress bar -->
                                                    <div class="progress xs">
                                                        <!-- Change the css width attribute to simulate progress -->
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                                <?php endif; ?>
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="./dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs"><?php 
                                                if(isset($_SESSION['id'])){
                                                echo($Alumno->nombre." ".$Alumno->apellido);
                                                }else{
                                                    echo "invitado";
                                                }
                                                ?>
                                                
                                                </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="./dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                        <?php 
                                                if(isset($_SESSION['id'])){
                                                echo($Alumno->nombre." ".$Alumno->apellido);
                                                }else{
                                                    echo "invitado";
                                                }
                                                ?>
                                            <small><?php 
                                                if(isset($_SESSION['id'])){
                                                echo($Alumno->email);
                                                }else{
                                                    echo "invitado@studere.uy";
                                                }
                                                ?></small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <!-- <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>
                                        
                                    </li> -->
                                    <!-- Menu Footer-->
                                    <?php 
                                        if(isset($_SESSION['id'])):
                                    ?>
                                        <li class="user-footer">
                                            <div class="pull-left">
                                                <a href="#" class="btn btn-default btn-flat" >Mi Perfil</a>
                                            </div>
                                            <div class="pull-right">
                                                <a href="includes/logout.php" class="btn btn-default btn-flat">Cerrar Sessión</a>
                                            </div>
                                        </li>
                                    <?php else: ?>
                                        <li class="user-footer">
                                            
                                            <div class="pull-right">
                                                <a href="https://studere.uy" class="btn btn-default btn-flat">Volver</a>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <!-- Full Width Column -->
       <!-- llamado al archivo correspondiente para mostrar el contenido ./contents/archivo.php -->

       <?php

        // if(isset($page)){
        //     $fileName = 'contents/'.$page.'.php';
        //     if ( file_exists($fileName)) {
                
        //         include_once 'contents/'.$page.".php";
        //     }
        //     else
        //     {
        //       echo '
                            
        //         <div class="content-wrapper">
        //             <div class="container">
        //                 <section class="content">
        //                     <div class="callout callout-danger">
        //                     <h4>Error!</h4>
        //                     <p>La página a la que intentas acceder no existe o esta siendo Modificada, Disculpa</p>
        //                     </div>
        //                 </section>
        //             </div>
        //         </div>

                
        //       ' ;
        //     }

        // }else{
        // include_once 'contents/inicio.php';
        

        ?>
  
                   <?php 
                        $msg_Str = '
                        
                                        <div class="box-footer">
                                        <!-- Content Header (Page header) -->
                                        
                        
                                        <!-- Main content -->
                                        
                                        <div class="alert alert-info alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h4><i class="icon fa fa-info"></i> Info!</h4>
                                            Estamos Actualizando la Plataforma de estudios para mejorar el servicio que ofrecemos,
                                            sepa disculparnos si alguna página presenta errores o no puede ingresar a ella. <br> Muchas Gracias.
                                    </div>
                                        
                                            <!-- /.box -->
                                        
                                        <!-- /.content -->
                                    </div>';

                        if(isset($_SESSION['msg'])){
                            if($_SESSION['msg'] == 1){
                                echo $msg_Str;
                                $_SESSION['msg'] += $_SESSION['msg'];
                            }
                        }else{
                            echo $msg_Str;
                            if(isset($_SESSION)){
                                $_SESSION['msg'] = 1;
                            }
                            
                        }
                                
                          
                    ?>
                    <!-- /.container -->
        
        <div id="contenido_php">
            

        </div>

       <!-- FIN llamado al archivo correspondiente para mostrar el contenido ./contents/archivo.php -->
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="container">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0
                </div>
                <strong>Copyright &copy; 2019-2020 <a href="https://studere.uy">Studere.uy</a>.</strong> All rights reserved.
            </div>
            <!-- /.container -->
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- PACE -->
    <script src="./bower_components/PACE/pace.min.js"></script>
    <!-- SlimScroll -->
    <script src="./bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="./bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="./dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="./dist/js/demo.js"></script>
   
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    
    <script>
        $(document).ready(function(){			
			$("#inicio").on("click", function(e){
                Pace.restart();
				e.preventDefault();
				$("#contenido_php").load("./contents/inicio.php");
                $("#inicio_li").addClass("active");
                $("#ciclo_basico_li").removeClass("active");
                $("#bachillerato_li").removeClass("active");
                $("#otros_li").removeClass("active");
                $("#mis_compras_li").removeClass("active");
                $("#nuestros_profesores_li").removeClass("active");

			});
		});
    </script>
     <script>
        $(document).ready(function(){			
			$("#ciclo_basico").on("click", function(e){
                Pace.restart();
				e.preventDefault();
				$("#contenido_php").load("./contents/ciclo_basico.php");
                $("#inicio_li").removeClass("active");
                $("#ciclo_basico_li").addClass("active");
                $("#bachillerato_li").removeClass("active");
                $("#otros_li").removeClass("active");
                $("#mis_compras_li").removeClass("active");
                $("#nuestros_profesores_li").removeClass("active");
			});
		});
    </script>
     <script>
        $(document).ready(function(){		
			$("#bachillerato").on("click", function(e){
                Pace.restart();
				e.preventDefault();
				$("#contenido_php").load("./contents/bachillerato.php");
                $("#inicio_li").removeClass("active");
                $("#ciclo_basico_li").removeClass("active");
                $("#bachillerato_li").addClass("active");
                $("#otros_li").removeClass("active");
                $("#mis_compras_li").removeClass("active");
                $("#nuestros_profesores_li").removeClass("active");
			});
		});
    </script>
     <script>
        $(document).ready(function(){	
       
			$("#otros").on("click", function(e){
                Pace.restart();		
				e.preventDefault();
				$("#contenido_php").load("./contents/otros.php");
                $("#inicio_li").removeClass("active");
                $("#ciclo_basico_li").removeClass("active");
                $("#bachillerato_li").removeClass("active");
                $("#otros_li").addClass("active");
                $("#mis_compras_li").removeClass("active");
                $("#nuestros_profesores_li").removeClass("active");
			});
		});
    </script>
     <script>
        $(document).ready(function(){	
           	
			$("#mis_compras").on("click", function(e){
                Pace.restart();		
				e.preventDefault();
				$("#contenido_php").load("./contents/mis_compras.php");
                $("#inicio_li").removeClass("active");
                $("#ciclo_basico_li").removeClass("active");
                $("#bachillerato_li").removeClass("active");
                $("#otros_li").removeClass("active");
                $("#mis_compras_li").addClass("active");
                $("#nuestros_profesores_li").removeClass("active");
			});
		});
    </script>
     <script>
        $(document).ready(function(){	
            		
			$("#nuestros_profesores").on("click", function(e){
                Pace.restart();		
				e.preventDefault();
				$("#contenido_php").load("./contents/nuestros_profesores.php");
                $("#inicio_li").removeClass("active");
                $("#ciclo_basico_li").removeClass("active");
                $("#bachillerato_li").removeClass("active");
                $("#otros_li").removeClass("active");
                $("#mis_compras_li").removeClass("active");
                $("#nuestros_profesores_li").addClass("active");
			});
		});
    </script>
</body>

</html>