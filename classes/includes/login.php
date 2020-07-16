<?php 
 
$email=$_POST['email'];
$contraseña= hash("sha512", $_POST['contraseña']);
//obtenemos el usuario resgistrado
$consulta="SELECT * FROM usuario WHERE Email='$email' AND Contraseña='$contraseña' AND token='1'";
$consulta2=consultarSQL($consulta);

$usuario=mysqli_fetch_assoc($consulta2);
// $consulta3=mysqli_fetch_assoc($consulta);
if($consulta2->num_rows>=1){
    include_once "./includes/usuarios_objeto.php";
    $User = new Usuario($usuario['id']);
    $materia = $usuario['materias'];

    setcookie('status', 'online', time() + 3600); #
    setcookie('id', $User->identificador, time() + 3600); # seteamos el numero de id del usuario en esta cookie

    if(!isset($_SESSION)){
      session_start();
    }
    $_SESSION['id'] = $User->identificador;
    $_SESSION['email'] = $email;
    $_SESSION['materia'] = $materia;

    $vacio = "";
    $admin = "admin";
    $consultamos="UPDATE usuario SET estado='online' WHERE Email='$email'";

    consultarSQL($consultamos);
    
    if(isset($_POST['redirectto'])){
      $url_nueva = $_POST['redirectto'];
      header ("Location: " . $url_nueva . "&usuario=" . $usuario['id']);

    }else {
      switch ($materia) {
        case $vacio:
          header ("Location: ./?id=$usuario[id]");
          break;
      
        case $admin:
          header ("Location: ./?id=$usuario[id]");
          break;
        
        default:
          header ("Location: ./?id=$usuario[id]");
          break;
  
  
      }
    }
    
    
    
    
     
    
}

?>