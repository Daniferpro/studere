 
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Studere.uy | WEBINAR </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../admin/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../admin/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../admin/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../admin/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script charset="UTF-8" src="//web.webpushs.com/js/push/72a2679820c89b10df008462554e3abb_1.js" async></script>

   
    
  <link rel="stylesheet" href="../admin/plugins/pace/pace.min.css">
  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   


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
                           <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-danger"><?php $Alumno->numeroMensajesNuevos();?></span>
                                </a>
                                <ul class="dropdown-menu">
                                <li class="header">Mensajes Nuevos</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                    <?php include "../classes/includes/mensajes_alumnos.php";?>
                                    </ul>
                                </li>
                                <li class="footer"><a href="../admin/panel/mailbox.php?id=<?php $Alumno->identificador;?>">Ir a mensajes</a></li>
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
                                    <img src="../admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
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
                                        <img src="../admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

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
                                                <a href="../" class="btn btn-default btn-flat">Volver</a>
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
       <!-- llamado al archivo correspondiente para mostrar el contenido ../admin/contents/archivo.php -->

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
  
                  
                    <!-- /.container -->
        
        <div id="contenido_php">
            
<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
       
 
        <!-- Main content -->
        
        <section class="content">
            ​<div class="col-l-12">
                <img class="img-responsive" src="../images/nuevos/webinar1.jpg" alt="Photo">
                
            </div>
            
           
                <!-- agregar un while por cada materia que exista -->
                
                <!-- fin del while -->
               
                <div class="col-l-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Formulario de Inscripcion para Webinar Gratuito el 20 de agosto a las 19:00 horas, Será trasmitido por plataforma Zoom, el link será eviado al email ingresado un par de días antes del evento. colocar un email válido</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                
               
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdFkPyC3B_p_m_KS7FUEVV8tT23rof1GqwCUXhmBaqxTd5PSw/viewform?embedded=true" width="100%" height="1284" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
   


              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>  
        </section>
        

     
        <!-- Left col -->
       
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        <!-- right col -->
      
         <!-- /.content -->
    </div>
    
    <!-- /.container -->
</div>
        </div>

       <!-- FIN llamado al archivo correspondiente para mostrar el contenido ../admin/contents/archivo.php -->
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
    <!-- ../admin/wrapper -->

    <!-- jQuery 3 -->
    <script src="../admin/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- PACE -->
    <script src="../admin/bower_components/PACE/pace.min.js"></script>
    <!-- SlimScroll -->
    <script src="../admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../admin/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../admin/dist/js/demo.js"></script>
   
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<?php 

if(isset($_GET['mensaje'])): ?>


<!-- codigo de los mensajes de toatsr -->
<script>
Command: toastr["warning"]("Su session a caducado, Por favor vuleva a iniciar session", "INICIE SESSION")

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

</script>
<?php endif;?>
    
</body>

</html>