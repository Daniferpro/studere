<?php  




include_once "../../includes/seguro.php";
include_once "../../includes/conectar.php";
include_once "includes/coneccionbdclases.php";

$palabra = $_POST['palabra'];
$palabramayus = strtoupper($palabra);


$alumno=$a['id'];


$query="SELECT * FROM clases WHERE Nombre_clase LIKE '%$palabra%' AND Alumno='$alumno' ";
$consulta=consultarSQL($query);

$query0="SELECT * FROM clases WHERE Nombre_clase LIKE '%$palabra%' AND Alumno='$alumno' ";
$consulta0=consultarSQL($query0);
$cursox= mysqli_fetch_assoc($consulta0);



         

if($consulta->num_rows>=1){
    
    $fecha_hoy= date("Y-m-d");
    $fecha_curso=$cursox['fecha_fin'];
   
        


    echo " <div class='courses_container'>
    <div class='row courses_row'>
    <div class='col-lg-12 course_col' align='center'>
    <h2>Resultados de la búsqueda</h2></div>";
                  
   


 while($cursos = mysqli_fetch_assoc($consulta)){
   

 if($fecha_hoy < $cursos['fecha_fin']){
     
     
   

   echo " 
        
        <!-- Course -->
        <div class='col-lg-4 course_col'>
        
            <div class='course'>
                <div class='course_image'><img src='images/clase_1.jpg' alt=''></div>
                <div class='course_body'>
                    <h3 class='course_title'><a href='clases/1bc/materias/$cursos[materia]/temas/$cursos[Nombre_clase]/'>$cursos[Nombre_clase]</a></h3>
                    <div class='course_teacher'>$cursos[Profesor]</div>
                    <div class='course_teacher'><a href='./mensajeria.php?materia=$cursos[materia]'>CHAT con el Profesor</a></div>
                    <div class='course_text'>
                        <p></p>
                    </div>
                </div>
                <div class='course_footer'>
                    <div class='course_footer_content d-flex flex-row align-items-center justify-content-start'>
                        <div class='course_info'>
                            <i class='fa fa-graduation-cap' aria-hidden='true'></i>
                            <span>Fin: $cursos[fecha_fin] </span>
                        </div>
                        
                        <div class='course_price ml-auto'> ACTIVO</div>
                    </div>
                </div>
            </div>
            
            </div>
						";}else{
                                $materia=$cursos['materia'];
                                $nombre_clases=$cursos['Nombre_clase'];
                                $query4="SELECT * FROM $materia WHERE nombre_clase='$nombre_clases'";
                                $consulta6=consultar3SQL($query4);
                                $resultado=mysqli_fetch_assoc($consulta6);
                                $precio_clase=$resultado['precio'];


                            echo " 
        
                            <!-- Course -->
                            <div class='col-lg-4 course_col'>
                       
                                <div class='course'>
                                    <div class='course_image'><img src='images/clase_2.jpg' alt=''></div>
                                    <div class='course_body'>
                                                                          
                                        <h3 class='course_title'><a href='clases/1bc/registra_fatc?id=$cursos[Nombre_clase]&materia=$cursos[materia]&usuario=$a[id]&id2=$cursos[id]&precio=$precio_clase'>$cursos[Nombre_clase]</a></h3>
                                        <div class='course_teacher'>$cursos[Profesor]</div>
                                        <div class='course_text'>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class='course_footer'>
                                        <div class='course_footer_content d-flex flex-row align-items-center justify-content-start'>
                                            <div class='course_info'>
                                                <i class='' aria-hidden='true'></i>
                                                <span>Finalizo el $cursos[fecha_fin] </span>
                                            </div>
                                            
                                            <div class='dangers ml-auto'> VENCIDO</div>
                                        </div>
                                    </div>
                                </div>
                                
                                </div>";
                        }
}

echo "</div>
</div>";

       
}else{



echo "

<div class='course'>
                
                <div class='course_body'>
                <div class='course_text'>
<table>
<tbody>

<tr class='courses_search_input'> <h4>No hemos encontrado resultados con la palabra : $palabramayus </h4>
                                  <li>Intenta escribir varias palabras a la vez</li>
                                  <li>Recuerda que la clase pudo Haber Vencido</li>
                                  <li>Busca con Otra Palabra diferente</li>
                                  <li>En el peor de los casos la clase o tema que buscas está siendo actualizada</li>    
                                  <li>Tal ven no lo has adquirido</li>  
                                  <li><a href='./clases/1bc/'> <button class='courses_search_button'>Ver los Cursos</button> </a></li>
                                  </tr> 

</tbody>
</table>
</div>
</div>
</div>";
}





// muestra_segun_pago($codigo1, $codigo2);

?>