
<?php
include_once '../includes/conecciones.php';
include_once '../includes/objetos.php';
include_once '../includes/seguridad.php';
if(!isset($_SESSION)){
    session_start();
}
$id_alumno = $_SESSION['id'];
$Msj_hour = new Mensajes_plataforma;
$Alumno = new Alumno($id_alumno);
?>
<html>
<style>
/* Definimos el color inicial */
.cambioColor {color:white;}
/* Definimos el color al pasar el mouse por encima */
.cambioColor:hover {color:violet;}
</style>
<div class="content-wrapper">
            <div class="container">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       <?php $Msj_hour->mostrarMensajeSegunHora($Alumno->nombre);?>
                        <small>Es hora de explorar tus cursos!!!</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Bienvenida</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="callout callout-info">
                        <h4>Tip!</h4>

                       <?php 
                       
                            echo "Actualente tienes ".$Alumno->clasesUser_num() ." Cursos en tu lista";
                            for ($i=0; $i < $Alumno->clasesUser_num(); $i++) { 
                                $id_clase = $Alumno->clasesUser_list_id($i);
                                $Curso = new Curso($id_clase);
                                echo "<li>" . $Curso->nombre . " " . $Curso->fecha_fin . " Materia: " .strtoupper($Curso->materia). "</li>";
                            }
                            // $materia = $Alumno->clasesUser_list_materia(1);

                       ?>
                        </p>
                        <?php # include '../includes/materiales_lista.php';?>
                    </div>

                    <div class="col-l-12">
                        <div class="box box-solid">
                            <div class="box-header with-border">
                            <h3 class="box-title">Mis Cursos & Clases</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                            <div class="box-group" id="accordion">
                                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                
                                <?php include_once '../includes/clases_list.php';
                                    listarClasesAlumno($id);
                                ?>


                            </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>  
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>

</html>