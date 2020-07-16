
<?php


include_once '../includes/conecciones.php';
include_once '../includes/objetos.php';
include_once '../../profe/includes/seguridad.php';

$id_alumno = $_SESSION['id'];
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
                       
                            echo "Actualente tienes ".$Alumno->clasesUser_num() ." Cursos e tu lista";
                            for ($i=0; $i < $Alumno->clasesUser_num(); $i++) { 
                                $id_clase = $Alumno->clasesUser_list_id($i);
                                $Curso = new Curso($id_clase);
                                echo "<li>" . $Curso->nombre . " " . $Curso->fecha_fin . " Materia: " .strtoupper($Curso->materia). "</li>";
                            }
                            $materia = $Alumno->clasesUser_list_materia(1);

                       ?>
                        </p>
                        <?php include '../includes/materiales_lista.php';?>
                    </div>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>

</html>