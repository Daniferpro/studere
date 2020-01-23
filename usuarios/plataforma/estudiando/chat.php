<?php
session_start();

//importamos conecciones a la bd

include "./procesos/conecciones.php";

//DATOS USUARIO

$email = $_SESSION['email'];                                                               // email usuario
$query = "SELECT * FROM usuario WHERE email='$email' ";                                    // consulta a la bd para obtener datos del usuario
$consulta = consultarSQL($query);                                                          // ejecución de la consulta por función
$datos_usuario = mysqli_fetch_assoc($consulta);                                            // asociamos resultado a variable
$alumno = $datos_usuario['Nombre'].$datos_usuario['Apellido']." ".$datos_usuario['Email']; // creamos variable alumno con los datos relevantes
$nombre_apellido = $datos_usuario['Nombre'] . " " . $datos_usuario['Apellido'];
$nombre1 = $datos_usuario['Nombre'].$datos_usuario['Apellido'];

$query2 = "SELECT * FROM clases WHERE Alumno = '$alumno'";
$mis_clases = mysqli_fetch_assoc(consultarSQL($query2));

//si presionan el boton de vaciar bandeja de entrada....

if(isset($_POST['vaciar'])){
  $nombre = strtolower($nombre1);
  //probar en el hosting $nombre1 o $nombre para truncate
  $eliminar = "TRUNCATE TABLE  $nombre1  ";
  $resultado = consultachatSQL($eliminar);

}

//DATOS CLASE RECIVIDA X GET

if(isset($_GET['materia']) && isset($_GET['chat'])){
$materia = $_GET['materia'];
}else{ header("Location: ../miscursos.php?error=Sin Permisos Para Acceder al Recurso.");}

$consulta00="SELECT * FROM usuario WHERE estado='online'";
$resultado00=consultarSQL($consulta00);



?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Plataforma Studere</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

   <script type="text/javascript">
		function comentarios(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('comentarios').innerHTML = req.responseText;
					
				}
			}

			req.open('GET', './procesos/comentarios.php?tema=<?php print $clase;?>', true);
			req.send();
		}

			//linea que hace que se refreseque la pagina cada segundo
		setInterval(function(){comentarios();}, 750);	

		
	</script>
   
  <!-- Mensajes x ajax prueba 1 -->
   <script type="text/javascript">
		function mensajes(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('mensaje').innerHTML = req.responseText;
					
				}
			}

			req.open('GET', './procesos/mensajes.php?materia=<?php echo $materia;?>', true);
			req.send();
		}

			//linea que hace que se refreseque la pagina cada segundo
		setInterval(function(){mensajes();}, 1000);	

		
	</script> 
  
</head>
<body class="hold-transition skin-blue sidebar-mini" onload="ajax(), chat_ajax();">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../miscursos.php?chat=<?php print $materia; ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P.S.</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Plataforma | Studere<b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Navegación</span>
      </a>
      

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar6.jfif" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $nombre_apellido;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image --> 
              <li class="user-header">
                <img src="dist/img/avatar6.jfif" class="img-circle" alt="User Image">

                <p>
                 <?php echo $nombre_apellido . " - " . $datos_usuario['Celular'];?> 
                  <small><?php echo $datos_usuario['Email']; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href=""# class="btn btn-default btn-flat">Estás mirando Videos de <?php print $materia;?></a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar6.jfif" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $nombre_apellido;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
          

        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar en mis cursos...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"> > > Usarios enlinea <span id='online'> <?php  if($resultado00){
          $num = random_int(36, 55);
          echo $resultado00->num_rows+ $num;

}
?></span></li>
        
        <li class="active treeview">
          <a href="#">  
            <i class="fa fa-dashboard"></i> <span><?php print $materia;?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> <?php print "Mensajes de " . $materia ;?></a></li>
            <li><a href="../clases/1bc/materias/<?php echo $materia;?>/"><i class="fa fa-circle-o"></i> <?php print "Ver más clases de " . $materia ;?></a></li>
          </ul>
        </li>
        
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Mis Cursos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <?php 
         
          // condicionamos para mostrar las clases del usuario de esta materia
          
          $consulta_clases = "SELECT * FROM clases WHERE Alumno = '$datos_usuario[id]' ";
          $consulta_clases_ejecuta = consultarSQL($consulta_clases);
         

          echo "<ul class='treeview-menu'>";
          
          while( $consulta_clases_resultado = mysqli_fetch_assoc($consulta_clases_ejecuta)):
            $nombre_clase_resultado = $consulta_clases_resultado['Nombre_clase'];
            $materia_clase_resultado = $consulta_clases_resultado['materia'];
          ?>
          
            <li><a href="index.php?materia=<?php print $materia_clase_resultado. '&tema='.$nombre_clase_resultado?>"><i class="fa fa-circle-o"></i> <?php print $nombre_clase_resultado;?></a></li>

          <?php endwhile;?>
          </ul>
        </li>
        
        <li id="mensaje">
          
        </li>
        
        
    </section>
   
    <!-- /.sidebar -->
  </aside>
            

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Mensajes
        <small>Tienes 2323 conversaciones activas.</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Plataforma</a></li>
        <li class="active">Chat</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Estudia.. El conocimiento no ocupa lugar!</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Sabías que..</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                
                <li><a href="#"><i class="fa fa-rocket"></i>El 90% de toda la información que llega a nuestro cerebro es de tipo visual y procesamos las imágenes hasta 60.000 veces más rápido
								 que cualquier texto. Afirman los estudios que retenemos un 10% de la información que oímos,
								 un 20% de la que leemos pero hasta un 80% de la que vemos.</a></li>
               
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Chats Activos con los Profesores</h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                
                <div class="btn-group">
                <form action="#"  method="post"> <input type="text" name="vaciar" hidden>
                <button type="submit"  class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i> Vaciar Bandeja de Entrada</button>
                  
                </form>
                 
                </div>
                
                <!-- /.btn-group -->
                
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody id="mensajeria">
                  <?php
                  
                  $query="SELECT * FROM usuario WHERE email='$email' ";
                  $consulta=consultarSQL($query);
                  $a=mysqli_fetch_assoc($consulta);
                  $nombre=$a['Nombre'].$a['Apellido'];
                  $consulta = "SELECT * FROM $nombre WHERE Nombre != '$a[Nombre]' ORDER BY fecha DESC ";
                  $ejecutar = consultachatSQL($consulta);
                  if($ejecutar->num_rows > 0):
                  While($fila = $ejecutar->fetch_assoc()) :
                  
                ?>
                   <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="redactar_mensajes.php?<?php echo "materia=" . $materia . "&chat=" . $nombre?>"><?php echo $fila['materia'];?></td>
                                    <td class="mailbox-subject"><b><?php echo $fila['mensaje'];?></b> 
                                    </td>
                                    <td class="mailbox-attachment"></td>
                                    <td class="mailbox-date"><?php echo $fila['fecha'];?></td>
                                  </tr>
                  
                  <?php 
                  endwhile;
                else:
                  
                  ?>
                
                <tr>
                                    <td><input type="checkbox"></td>
                                    <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a></td>
                                    <td class="mailbox-name"><a href="redactar_mensajes.php?<?php echo "materia=" . $materia . "&chat=" . $nombre?>">Ver Chat  </td>
                                    <td class="mailbox-subject"><b>Aún no Han contestado ningún mensaje , Si no has Escrito uno, ¿Que esperas?..</b> 
                                    </td>
                                    <td class="mailbox-attachment"></td>
                                    <td class="mailbox-date"><?php  echo date('d-m-y') ?></td>
                                  </tr>
                
                  <?php
                  endif;
                  
                   ?>
                  
                 
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-verify-o"></i>Recuerda que Los Profesores contestarán tus preguntas lo antes posible, Gracias.</button>
                 
                </div>
                <!-- /.btn-group -->
                
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Desde</b> Tacuarembó Uruguay
    </div>
    <strong>Copyright &copy; 2018-2019 <a href="#">StuderePlatform</a>.</strong>Todos los derechos Reservados.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">Ajustes Generales</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Panel de Usuario
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Mostrar mas informacion de este panel
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Redirigir todos los Emails
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
             Algo de ariiba
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Otra opcion
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Descripcion de la opcion de arriba
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Config Mensajes</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
             Mostrarme Online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Apagar Notificaciones
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Borrar Historia de Mensajes
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
