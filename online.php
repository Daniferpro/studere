<?php
include_once "../../includes/conectar.php";
include_once "../../includes/seguro.php";


$consulta00="SELECT * FROM usuario WHERE estado='online'";
$resultado00=consultarSQL($consulta00);

if($resultado00):

?>
<html>

<div class="login_button">
<a href="#">Usuarios Online <?php echo $resultado00->num_rows; ?></a></div>

</html>
<?php  endif;?>
