<?php

// hacer consultas a la bd para postear comentarios en el index y mostrarlos atravez de ajax()

require "./conecciones.php";
require "./seguro_usuarios.php";
$tema = $_GET['tema'];

$comentarios = comentariosSQL("SELECT * FROM post WHERE clase='$tema'");


if($comentarios->num_rows>0):

while($post = mysqli_fetch_assoc($comentarios)): ?>

<html>
<!-- chat item -->
<div class="item">
                <img src="dist/img/avatar6.jfif" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php   echo $post['fecha'] ; ?></small>
                    <?php echo $post['usuario'] ; ?>
                  </a>
                  <?php  echo $post['comentario'] ; ?>
                </p>
                
              </div>
              
<!-- /.item -->

</html>

<?php endwhile;

endif;

if($comentarios->num_rows<=0):?>

<html>
<!-- chat item -->
<div class="item">
                <img src="dist/img/avatar6.jfif" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2019</small>
                    
                  </a>
                  Aún nadie ha comentado en esta clase, anímate y se el primero..
                </p>
                
              </div>
              
<!-- /.item -->

</html>



<?php endif;?>

