
<?php  
include_once '../includes/objetos.php';
$Msj_hour = new Mensajes_plataforma;

?>
<html>

<div class="content-wrapper">
            <div class="container">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       <?php $Msj_hour->mostrarMensajeSegunHora('Invitado');?>
                        <small>Es hora de explorar tus cursos!!! Inicia Session para acceder a la plataforma.</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                        <li class="active">Login</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="login-box">
                    <div class="login-logo">
                        <a href="#"><b>STUDERE</b></a>
                    </div>
                    <!-- /.login-logo -->
                    <div class="login-box-body">
                        <p class="login-box-msg">Inicia Sesión para continuar</p>

                        <form action="" method="post">
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" name="email" placeholder="
                            <?php if(isset($_GET['email'])){
                            print $_GET['email'];
                            }else{echo "Ingresa tu Email..";}
                            ?>
                            
                            " value="<?php if(isset($_GET['email'])){ print $_GET['email'];}?>" >
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="contraseña" placeholder="Password" >
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                <input type="checkbox" name="recordarme"> Recordarme
                                </label>
                            </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
                            </div>
                            <!-- /.col -->
                        </div>
                        </form>

                        
                        <!-- /.social-auth-links -->

                        <a href="#">Olvidé mi contraseña</a><br>
                        <a href="https://studere.uy/usuarios/plataforma/estudiando/register.php" class="text-center">Registrarme!</a>

                    </div>
                    <!-- /.login-box-body -->
                    </div>
                </section>