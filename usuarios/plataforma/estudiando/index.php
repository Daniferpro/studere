<?php
session_start();

//importamos conecciones a la bd

include "../../../profe/includes/conecciones.php";

//DATOS USUARIO

$email = $_SESSION['email'];                                                               // email usuario
$query = "SELECT * FROM usuario WHERE email='$email' ";                                    // consulta a la bd para obtener datos del usuario
$consulta = consultarSQL($query);                                                          // ejecución de la consulta por función
$datos_usuario = mysqli_fetch_assoc($consulta);                                            // asociamos resultado a variable
$alumno = $datos_usuario['id']; // creamos variable alumno con los datos relevantes
$nombre_apellido = $datos_usuario['Nombre'] . " " . $datos_usuario['Apellido'];
 
$query2 = "SELECT * FROM clases WHERE Alumno = '$alumno'";
$mis_clases = mysqli_fetch_assoc(consultarSQL($query2));

//DATOS CLASE RECIVIDA X GET

if(isset($_GET['materia'])){
$materia = $_GET['materia'];
$clase = $_GET['tema'];
$id_clase = $_GET['id_clase'];
}else{ header("Location: ../miscursos.php?error=Sin Permisos Para Acceder al Curso.");}

include "../includes/coneccionbdclases.php";
// $qry_tema = "SELECT * FROM $materia WHERE nombre_clase = '$clase'";
// $texto_tema_consulta = consultar3SQL($qry_tema);
// $texto_de_tema = mysqli_fetch_assoc($texto_tema_consulta);

// //consultamos la lista de video para obtener el link a los mismos y mostrar al alumno
// $lista_consulta =consultar3SQL("SELECT * FROM $materia WHERE nombre_clase = '$clase'");

// $consulta_lista = mysqli_fetch_assoc($lista_consulta);
// $lista_videos = explode('_', $consulta_lista['videos']);
// $lista_subtemas = explode('_', $consulta_lista['temas']);








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
		function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('online').innerHTML = req.responseText;
					
				}
			}

			req.open('GET', './procesos/usuarios_online.php', true);
			req.send();
		}

			//linea que hace que se refreseque la pagina cada segundo
		setInterval(function(){ajax();}, 500);	

		
	</script>
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
  <script type="text/javascript">
		function comentarios_enviar(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('enviar_comentario').innerHTML = req.responseText;
					
				}
			}

			req.open('GET', './procesos/envio_comentarios.php', true);
			req.send();
		}

			//linea que hace que se refreseque la pagina cada segundo
		setInterval(function(){comentarios_enviar();}, 10000);	

		
	</script>
   
  <!-- Mensajes x ajax prueba 1 -->
 
</head>
<body class="hold-transition skin-blue sidebar-mini" onload="ajax();" onload="mensajes();" onload="comentarios();" onload="comentarios_enviar();">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../miscursos.php?estabamirando=<?php print $clase.'&materia='.$materia;?>" class="logo">
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
        <li class="header"> > > Usarios enlinea <?php print "<span id='online'></span>";?></li>
        
        <li class="active treeview">
          <a href="#">  
            <i class="fa fa-dashboard"></i> <span><?php print $materia;?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="#"><i class="fa fa-circle-o"></i> <?php print $clase ;?></a></li>
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
          
          $consulta_clases = "SELECT * FROM clases WHERE Alumno = '$alumno' ";
          $consulta_clases_ejecuta = consultarSQL($consulta_clases);
         

          echo "<ul class='treeview-menu'>";
          
          while( $consulta_clases_resultado = mysqli_fetch_assoc($consulta_clases_ejecuta)):
            $nombre_clase_resultado = $consulta_clases_resultado['Nombre_clase'];
            $materia_clase_resultado = $consulta_clases_resultado['materia'];
          ?>
          
            <li><a href="index.php?materia=<?php print $materia_clase_resultado. '&tema='.$nombre_clase_resultado .'&id_clase='.$id_clase;?>"><i class="fa fa-circle-o"></i> <?php print $nombre_clase_resultado;?></a></li>

          <?php endwhile;?>
          </ul>
        </li>
        
        <li id="mensaje">
          <?php 


  $consultamos="SHOW TABLES FROM chatusuarios";
  // en el hosting es $consultamos="SHOW TABLES FROM daniferp_chatusu";

	
	$chat=consultachatSQL($consultamos);
	$i=0;
	
	while ($row = mysqli_fetch_row($chat))
				{	
				
				$persona=$row[0];
				$consulta8="SELECT * FROM $persona WHERE materia='$materia'";
				$cc=consultachatSQL($consulta8);
			    if($cc->num_rows>0){$i++;}
				
				}	
if(isset($cc)):	
if($cc->num_rows>0):

    ?>
<html>
<a href="./chat.php?chat=mensajes&materia=<?php print $materia;?>">
            <!-- <i class="fa fa-envelope"></i> <span>Mensajes</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span> -->
          
    
<i class="fa fa-envelope"></i> <span>Chats de <?php echo $materia;?></span>
            <span class="pull-right-container">
              
              <small class="label pull-right bg-red"><?php echo $i;?></small>
            </span>
</html>
<?php  endif;
	   if($cc->num_rows<=0):?>
	   </a>
	   
<html>
<a href="./chat.php?chat=mensajes&materia=<?php print $materia;?>" >
<i class="fa fa-envelope"></i> <span>Chats con <?php echo $materia;?></span>
            <span class="pull-right-container">
              
              <small class="label pull-right bg-green"><?php echo $i;?></small>
              
            </span>
			</a>
	
	</html>




<?php  endif;
	   else:
		   ?>
		   <a href="./chat.php?chat=mensajes&materia=<?php print $materia;?>">
            <!-- <i class="fa fa-envelope"></i> <span>Mensajes</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span> -->
          
    
<i class="fa fa-envelope"></i> <span>Chat de <?php echo $materia;?></span>
            <span class="pull-right-container">
              
              <small class="label pull-right bg-red"><?php echo $i;?></small>
            </span>
</html>
	   <?php endif;?>

        </li>
        <li>

        <a href="../miscursos.php?estabamirando=<?php print $clase.'&materia='.$materia;?>">
            <i class="fa fa-mail-reply-all"></i> <span>Volver Atrás</span>
            <span class="pull-right-container">
              <!-- <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small> -->
            </span>
          </a>
        </li>
        
    </section>
   
    <!-- /.sidebar -->
  </aside>
            

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Plataforma Studere
        <small>Como en clase pero en casa !</small>
        <small>Estoy estudiando la asignatura: <?php print $materia;?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../miscursos.php?estabamirando=<?php print $clase.'&materia='.$materia;?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Material de Estudio</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->

      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right">
              <!-- muestra el video de portada -->
              <li class="pull-left header"><i class="fa fa-inbox"></i><?php print $clase;?></li>
              </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              
            </div>
          </div>
          <!-- /.nav-tabs-custom -->
          <div class="row">
  <div class="box-header with-border">
    <div class="box box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">Link de Video Conferencia</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="box-group" id="accordion">
          <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
          <div class="panel box box-primary">
            <div class="box-header with-border">
              <h4 class="box-title">
              <?php 
              $link = mysqli_fetch_assoc(gruposSQL("SELECT * FROM $materia WHERE id=$id_clase "));
              $link_1 = $link['link_vc'];
              
              
              ?>
                <a  href="<?php echo $link_1;?>">
                  <?php 
                  
                  
                  print $link_1;?>
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="box-body">
              <h3 class="box-title">contraseña:: </h3>
                <?php print $link['Contraseña_vc'];?>
              </div>
            </div>
          </div>
         
          
         
         
          <!-- aqui iria los colapsables segun la cantidad de vidoes del tema a mostrar -->
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
  
  <!-- /.col -->
</div>
<!-- /.row -->
          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Comentarios recibidos</h3>

              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
              </div>
            </div>
            <div class="box-body chat" id="chat-box">
              <!-- chat item  traidos por ajax()-->
              <span id="comentarios"></span>
            </div>
            <!-- /.chat -->
            <!-- <span id="enviar_comentario">
            </span> -->
            <div class="form-horizontal">
              <form action="#" method="post">
                
                <div>
                  <textarea class="" name="comentario" placeholder=" Escribe tu Comentario....."
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
             
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Enviar Post
                <i class="fa fa-arrow-circle-right"></i></button>
              <!-- /.box-footer -->
            
            <?php  
                  
                  if(isset($_POST['comentario'])){

                    if(!empty($_POST['comentario'])){
                 
                  $fecha = date('d/m/Y');

                  comentariosSQL("INSERT INTO post (`id`, `usuario`, `comentario`, `fecha`, `clase`) VALUES (NULL, '$nombre_apellido', '$_POST[comentario]', '$fecha', '$clase');");
                    }else{ echo '
                                <div class="info-box">
                                    <span class="info-box-icon bg-red"><i class="fa fa-comments-o"></i></span>
                    
                                  <div class="info-box-content">
                                    <span class="info-box-text">Comentario NO enviado</span>
                                    <span class="info-box-number">No puedes enviar un comentario vacío.. </span>
                                  </div>
                              
                                </div>
                                '; }
                   }?>
              </form>  
          </div>            
          
          <!-- /.box (chat box) -->

          <!-- TO DO List -->
        
          <!-- /.box -->

          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Tienes Dudas sobre algo? </h3><small> envíanos un e-mail</small>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="#" method="post">
                
                <div>
                  <textarea class="textarea" name="mensaje" placeholder="<?php print $nombre_apellido;?> Aquí puedes escribir tu mensaje, duda, consultas o tus inquietudes, estamos para ayudarte... Equipo de studere.uy"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
             
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" id="sendEmail">Enviar
                <i class="fa fa-arrow-circle-right"></i></button>
                <?php
                  //si envian un email

                    if(isset($_POST['mensaje'])){
                      $mensaje_usuario = $_POST['mensaje'];
                      $mensaje_usuario_mas_datos = 'El usuario: ' . $alumno . ' ha enviado el siguiente mensaje estando en Plataforma2-> ' . $materia . '->' . $clase . ' MENSAJE : : : ' . $mensaje_usuario;
                      // mail('studereplataforma@gmail.com', 'Mensaje Desde Alumno de Studere', $mensaje_usuario_mas_datos);
                    
                      echo '
                      <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
            
                        <div class="info-box-content">
                          <span class="info-box-text">Mensaje enviado</span>
                          <span class="info-box-number">Muchas Gracias por ponerte en contacto con Nosotros</span>
                        </div>
                      
                      </div> '; 
                    }

                     ?>
          
            </div>
          </form>
          </div>


        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
       
          <!-- /.box -->

          <!-- solid sales graph -->
         
          <!-- /.box -->

         
          <!-- Calendar -->
          <!-- START ACCORDION & CAROUSEL-->
      


<!-- END ACCORDION & CAROUSEL-->
      
          <div class="box box-solid">
        <div class="box box-solid">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Descripcion</a></li>
              <li><a href="#tab_2" data-toggle="tab">MATERIAL</a></li>
              <li><a href="#tab_3" data-toggle="tab">Recuerda...</a></li>
             
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <li>Informacion de la clase</li>
                <b><?php echo $link['descripcion'];?> </b>
                
                <p><?php 
                // $cantidad_subtemas = 0;
                // while(count($lista_subtemas)>$cantidad_subtemas){

                //   print ("<li>" . $lista_subtemas[$cantidad_subtemas]);
                //   $cantidad_subtemas += 1;

                // }
                ?>
                <p> 
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
               <h4>Clic para descargar</h4>
               <?php 
               
                
               function obtener_estructura_directorios($ruta){
                // Se comprueba que realmente sea la ruta de un directorio
                if (is_dir($ruta)){
                    // Abre un gestor de directorios para la ruta indicada
                    $gestor = opendir($ruta);
                    echo "<ul>";
            
                    // Recorre todos los elementos del directorio
                    while (($archivo = readdir($gestor)) !== false)  {
                            
                        $ruta_completa = $ruta . "/" . $archivo;
            
                        // Se muestran todos los archivos y carpetas excepto "." y ".."
                        if ($archivo != "." && $archivo != "..") {
                            // Si es un directorio se recorre recursivamente
                            if (is_dir($ruta_completa)) {
                                echo "<li>" . $archivo . "</li>";
                                obtener_estructura_directorios($ruta_completa);
                            } else {
                                echo "<a download='studere.uy_material_$archivo' href='$ruta_completa'><li>" . $archivo . "</li></a>";
                            }
                        }
                    }
                    
                    // Cierra el gestor de directorios
                    closedir($gestor);
                    echo "</ul>";
                } else {
                    echo "Sin materiales para descargar....<br/>";
                }
            }
               
                  
               
               
               
               
            $ruta = '../../../profe/material/'.$materia.'/'.$id_clase;
            obtener_estructura_directorios($ruta);
               
               ?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <b>Recueda que:</b>
                <p>asda </p>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
          <!-- /.box -->

        </section>
        
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.13
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
