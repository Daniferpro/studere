<?php 
$destino=$_POST['email'];
$codigo0=$_GET['cd'];
$mensaje="Copia y pega éste codigo $codigo0 en la casilla validar Email para finalizar!!!";
mail($destino, "Email de Validacion Plataforma Uno!" ,$mensaje);
 


?>