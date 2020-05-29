<?php 

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

    //seteamos cookie para estado cullo valor sera online una vez inicie sesion.
    setcookie('status', 'online', time() + 365 * 24 * 60 * 60);
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
    $materia = $usuario['materias'];
    $_SESSION['email'] = $email;
    $_SESSION['materia'] = $materia;
    $vacio = "";
    $admin = "admin";
    $consultamos="UPDATE usuario SET estado='online' WHERE Email='$email'";
    consultarSQL($consultamos);
    
    switch ($materia) {
      case $vacio:
        header ("Location: ./usuarios/plataforma/index.php");
        break;
    
      case $admin:
        header ("Location: ./admin/?materia=admin&id=$usuario[id]");
        break;
      
      default:
        header ("Location: ./profe/?materia=$usuario[materias]&id=$usuario[id]");
        break;
    }
    
    
     
    
}else{

    echo "<script language='JavaScript'> alert (' Usuario o Contraseña Incorrecto'); </script>"; 

}

?>