<?php  

// Solucionar problema con el resultado donde muestra el acceso solo ala primera clase comprada de la bd, si hay mas de una muestra solo la primera


include_once "../../../../includes/seguro.php";
include_once "../../../../includes/conectar.php";
include_once "../../includes/coneccionbdclases.php";

$palabra = $_POST['palabra'];
$palabramayus = strtoupper($palabra);
$materia = $_POST['seleccion'];


$query="SELECT * FROM $materia WHERE nombre_clase LIKE '%$palabra%' OR temas LIKE '%$palabra%' ";
$consulta=consultar3SQL($query);


if($consulta->num_rows>=1){

    echo 
    "
 <div class='course_info '>
    <table>
        <thead class='courses_search_input'>
            <th class='courses_search_input'>Nombre Clase</th>
            <th class='courses_search_input'>Alumnos actuales</th>
            <th class='courses_search_input'>Profesor Referente</th>
 
        </thead>
        <tbody>";

        while($fila = mysqli_fetch_assoc($consulta)){

                $hola=$_SESSION['email'];
                $query4="SELECT * FROM usuario WHERE email='$hola' ";
                $consulta4=consultarSQL($query4);
                $a=mysqli_fetch_assoc($consulta4);

                $alumno=$a['Nombre'].$a['Apellido']." ".$a['Email'];

                $query3="SELECT * FROM clases WHERE Alumno='$alumno' AND materia='$materia' ";
                $consulta2=consultarSQL($query3);
                $s=mysqli_fetch_assoc($consulta2);
                $z=mysqli_fetch_lengths($consulta2);
                $y=mysqli_fetch_array($consulta2);
                

            if($fila['nombre_clase']==$s['Nombre_clase']){
                    

                    echo " <tr>
                    <td class='courses_search_input'> <a  href='materias/$materia/temas/$fila[nombre_clase]/'>$fila[nombre_clase]</a></td>
                        <td  class='courses_search_input'>$fila[alumnos] alumnos actuales</td>
                        <td class='courses_search_input'>$fila[profesor]</td>
                    </tr>";

            }else{
                            // lo enviamos a la pagina de procesos/pago_clase y por get el nombre de clase como referencia. 
                    echo " <tr>                                  
                    <td class='courses_search_input'> <a  href='registra_fatc.php?id=$fila[nombre_clase]&materia=$materia&usuario=$a[id]&precio=$fila[precio],00&id2=$fila[id]'>$fila[nombre_clase].</a></td>
                        <td  class='courses_search_input'>$fila[alumnos] alumnos actuales</td>
                        <td class='courses_search_input'>$fila[profesor]</td>
                        
                    </tr>";

            }


            

        }

        echo " </tbody>
                </table>
                <br>
                <br>
                </div>";
       
}else{



echo "
<div class='course_info '>
<table>
<tbody>

<tr class='courses_search_input'> <li>No hemos encontrado resultados con la palabra o frase $palabramayus </li>
                                  <li>Intenta escribir varias palabras a la vez </li>   
                                  <li>Busca en otra materia, talves en $materia no está </li>                                                  
                                  <li>En el peor de los casos la clase o tema que buscas no se ha añadido o esta siendo actualizada</li>
                                  </tr> 

</tbody>
</table>
</div>";
}





// muestra_segun_pago($codigo1, $codigo2);

?>