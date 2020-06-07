<?php  

// Solucionar problema con el resultado donde muestra el acceso solo ala primera clase comprada de la bd, si hay mas de una muestra solo la primera


include_once "../../includes/seguro.php";
include_once "../../includes/conectar.php";
include_once "./clases/bachillerato/conn/conecciones.php";

$palabra = $_POST['palabra'];
$palabramayus = strtoupper($palabra);
$materia = $_POST['seleccion'];


$query="SELECT * FROM $materia WHERE Nombre LIKE '%$palabra%' OR descripcion LIKE '%$palabra%' ";
$consulta=gruposSQL($query);


if($consulta->num_rows>=1){

    echo 
    "
 <div class='course_info '>
    <table>
        <thead class='courses_search_input'>
            <th class='courses_search_input'>Pack de Clase</th>
            <th class='courses_search_input'>Horario</th>
            <th class='courses_search_input'>Dias</th>
            <th class='courses_search_input'>Precio</th>
 
        </thead>
        <tbody>";

        while($fila = mysqli_fetch_assoc($consulta)){

              
            
                    

                            // lo enviamos a la pagina de procesos/pago_clase y por get el nombre de clase como referencia. 
                    echo " <tr>                                  
                    <td class='courses_search_input'> <a  href='./clases/bachillerato/registra_fatc.php?id=$fila[Nombre]&materia=$materia&usuario=$a[id]&precio=$fila[Precio],00&id2=$fila[id]'>$fila[Nombre].</a></td>
                        <td  class='courses_search_input'>$fila[Horario]</td>
                        <td class='courses_search_input'>$fila[Dias]</td>
                        <td class='courses_search_input'>$fila[Precio]</td>
                        
                    </tr>";
                    echo " ";}
       
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
";
}





// muestra_segun_pago($codigo1, $codigo2);

?>