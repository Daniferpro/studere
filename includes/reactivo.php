<?php 
    require_once "conectar.php";
    $nuevapass=md5(uniqid(mt_rand(), true));
    $userobtenido=$_POST['usuario'];
    $tokenobtenido=$_POST['token3'];
    $up3="SELECT Email FROM usuario WHERE Email='$userobtenido'";
    $consulta7=consultarSQL($up3);
    $resultado2=mysqli_fetch_assoc($consulta7);
                                    
    
        if( $resultado2['Email'] == $userobtenido  && $resultado2['token'] == $tokenobtenido){

        
        $up="UPDATE usuario SET Token='1', Contraseña='$nuevapass' WHERE Email='$userobtenido'" ;
        consultarSQL($up);
                
        header("Location: ../index.php?pass=$nuevapass");
        }else{
            echo "<script lenguage='javascript'> alert('La LLave de acceso no es correcta verifica'); </script> ";
        }
        
							
                                    
                                  