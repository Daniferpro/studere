<?php

include_once '../includes/objetos.php';
include_once '../../admin/includes/conecciones.php';
include_once '../../profe/includes/seguridad.php';

$id_alumno = $_COOKIE['id'];
$Msj_hour = new Mensajes_plataforma;
$Alumno = new Alumno($id_alumno);
$page="ciclo_basico";
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

                        <p>CILCLO BASICO<br> Muchas Gracias.
                        </p>
                    </div>
                    <!-- /.box -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.container -->
        </div>

</html>