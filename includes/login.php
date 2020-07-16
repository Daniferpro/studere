<?php 

$email=$_POST['email'];
$contraseña= hash("sha512", $_POST['contraseña']);
//obtenemos el usuario resgistrado
$consulta="SELECT * FROM usuario WHERE Email='$email' AND Contraseña='$contraseña' AND token='1'";
$consulta2=consultarSQL($consulta);

$usuario=mysqli_fetch_assoc($consulta2);
// $consulta3=mysqli_fetch_assoc($consulta);
if($consulta2->num_rows>=1){
    include_once "./admin/includes/usuarios_objeto.php";
    $User = new Usuario($usuario['id']);
    //seteamos cookie para estado cullo valor sera online una vez inicie sesion.
    setcookie('status', 'online', time() + 3600); #
    setcookie('id', $User->identificador, time() + 3600); #eteamos el numero de id del usuario en esta cookie
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
    session_set_cookie_params(3600,'/','.studere.uy');
    session_start();
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
          header ("Location: ./usuarios/plataforma/index.php");
    //       echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    //       <div style="margin: 15% 50%;width:300px;" class="center">
            
    //         </div>';
            
    //         echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    //         <script>
    //         $( document ).ready(function(){
    //           setTimeout(function(){
    //             document.getElementById("nologginredir").submit();
    //           }, 0);
              
    //       });
    //         </script>
    //       ';
    
    // echo '<form method="post" action="./classes/" id="nologginredir">
        
    //       <input type="hidden" value="'.$User->identificador.'" name="id">
    //       </form>';

          break;
      
        case $admin:
          header ("Location: ./admin/?materia=admin&id=$usuario[id]");
          break;
        
        default:
          header ("Location: ./profe/?materia=$usuario[materias]&id=$usuario[id]");
          break;
  
  
      }
    }
    
    
    
    
     
    
}else{

    echo "<script language='JavaScript'> alert (' Usuario o Contraseña Incorrecto'); </script>";
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $( document ).ready(function() {
      document.getElementById("nologginredir").submit();
  });
    </script>
  ';
    $url_out_session = $_POST['redirectto'];
    echo '<form method="post" action="#" id="nologginredir">
    <input type="hidden" value="'.$url_out_session.'" name="url_redirect">
    </form>
    ';

}

?>