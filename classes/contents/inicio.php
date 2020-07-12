<?php

include_once '../includes/objetos.php';
include_once '../includes/conecciones.php';
include_once '../includes/seguridad.php';

$id_alumno = $_COOKIE['id']; 
$_SESSION['id'] = $id_alumno;
$Msj_hour = new Mensajes_plataforma;
$Alumno = new Alumno($id_alumno);
?>
<html>

<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php $Msj_hour->mostrarMensajeSegunHora($Alumno->nombre);?>
                <small>Es hora de explorar tus cursos!!!</small>
            </h1>
           
        </section>
        

        <!-- Main content -->
        
        <section class="content">
            ​<div class="col-sm-12">
                <img class="img-responsive" src="img/1.jpg" alt="Photo">
                
            </div>
            
           
                <!-- agregar un while por cada materia que exista -->
                
                <!-- fin del while -->
                <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Explora Los cursos & materias disponibles hasta la fecha</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                
                <?php include_once '../includes/courses_list.php';?>


              </div>
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

</html>