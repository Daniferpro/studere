<?php
if(!isset($_SESSION)){
	session_start();
}
include_once "./conecciones.php";
$hola=$_SESSION['email'];
$query="SELECT * FROM usuario WHERE email='$hola' ";
$consulta=consultarSQL($query);
$a=mysqli_fetch_assoc($consulta);
$materia = $_GET['materia'];


function chatSQL($query){
	$coneccion=new mysqli("localhost", "root", "", "chatusuarios");
	if(mysqli_connect_errno()){
		echo "Problemas en la Coneccion de Base de Datos";
	}
	$coneccion->set_charset("utf8");
	$coneccion->autocommit(FALSE);
	$coneccion->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
	if($consulta=$coneccion->query($query)){
			if( $coneccion->commit()){
			
			}else{
				echo"No se han guardado los datos";
			}
			}else{
			$coneccion->rollback();
			
	}
		return $consulta;
	}


	$consultamos="SHOW TABLES FROM chatusuarios";

	
	$chat=chatSQL($consultamos);
	$i=0;
	
	while ($row = mysqli_fetch_row($chat))
				{	
				
				$persona=$row[0];
				$consulta8="SELECT * FROM $persona WHERE materia='$materia'";
				$cc=chatSQL($consulta8);
			    if($cc->num_rows>0){$i++;}
				
				}	
if(isset($cc)):	
if($cc->num_rows>0):

    ?>
<html>
<a href="./chat.php?chat=mensajes&materia=<?php print $materia;?>">
            <!-- <i class="fa fa-envelope"></i> <span>Mensajes</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span> -->
          
    
<i class="fa fa-envelope"></i> <span>Chats de <?php echo $materia;?></span>
            <span class="pull-right-container">
              
              <small class="label pull-right bg-red"><?php echo $i;?></small>
            </span>
</html>
<?php  endif;
	   if($cc->num_rows<=0):?>
	   </a>
	   
<html>
<a href="./chat.php?chat=mensajes&materia=<?php print $materia;?>" >
<i class="fa fa-envelope"></i> <span>Chats con <?php echo $materia;?></span>
            <span class="pull-right-container">
              
              <small class="label pull-right bg-green"><?php echo $i;?></small>
              
            </span>
			</a>
	
	</html>




<?php  endif;
	   else:
		   ?>
		   <a href="./chat.php?chat=mensajes&materia=<?php print $materia;?>">
            <!-- <i class="fa fa-envelope"></i> <span>Mensajes</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span> -->
          
    
<i class="fa fa-envelope"></i> <span>Chat de <?php echo $materia;?></span>
            <span class="pull-right-container">
              
              <small class="label pull-right bg-red"><?php echo $i;?></small>
            </span>
</html>
	   <?php endif;?>
