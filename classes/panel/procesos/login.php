<?php 

include "conecciones.php";
$email=$_POST['email'];
$contraseña=base64_encode($_POST['contraseña']);
$token3="1";
//obtenemos el usuario resgistrado
$consulta="SELECT * FROM usuario WHERE Email='$email' AND Contraseña='$contraseña' AND token='$token3'";
$consulta2=consultarSQL($consulta);

$usuario=mysqli_fetch_assoc($consulta2);
// $consulta3=mysqli_fetch_assoc($consulta);
if($consulta2->num_rows>=1){
    session_start();
    $_SESSION['token']=md5(uniqid(mt_rand(), true));
    $_SESSION['email']=$email ;
   
    if(isset($_COOKIE['contador']))
    { 
      // Caduca en un año   
      setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60); 
      $mensaje = 'Número de visitas: ' . $_COOKIE['contador']; 
    } 
    else 
    { 
      // Caduca en un año 
      setcookie('contador', 1, time() + 365 * 24 * 60 * 60); 
      $mensaje = 'Bienvenido a Plataforma Studere'; 
    } 

    //seteamos cookie para estado cullo valor sera online una vez inicie sesion.
    setcookie('status', 'online', time() + 365 * 24 * 60 * 60);

     

    
    //seteamos cookies de uso interno 
    setcookie('user', $email, time() + 365 * 24 * 60 * 60);
    setcookie('contra', $contraseña, time() + 365 * 24 * 60 * 60);
    
    
    $consultamos="UPDATE usuario SET estado='online' WHERE Email='$email'";
    $validacion = consultarSQL($consultamos);
    
if($validacion){header ("Location: ../../miscursos.php");}
    
}else{

    echo "<script type='text/javascript'> alert (' Usuario o Contraseña Incorrecto'); </script>"; 
    header ("Location: ../login.php?error=Contraseña_o_Usuario_incorrecto");

}















?>