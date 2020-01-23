<?php 
$email=$_POST['email'];
$contraseña=md5($_POST['contraseña']);
$token2=$_POST['token2'];
$consulta="SELECT * FROM usuario WHERE email='$email' AND contraseña='$contraseña' AND token='$token2' ";
$consulta2=consultarSQL($consulta);
// $consulta3=mysqli_fetch_assoc($consulta);
if($consulta2->num_rows>=1){
    session_start();
    $_SESSION['token']=md5(uniqid(mt_rand(), true));
    $_SESSION['email']=$email ;
    $consultamos="UPDATE usuario SET estado='online' WHERE Email='$email'";
    consultarSQL($consultamos);
    header ("Location: ./usuarios/plataforma/index.php");
    
}else{

    echo "<script language='JavaScript'> alert (' Usuario, Contraseña O Código Incorrecto'); </script>"; 

}















?>