<?php
	
	# en local son estas config
	// $servername = "localhost";
    // $username = "root";
  	// $password = "";
	// $dbname = "grupos";
	  
	#en el hosting son las siguientes

	$servername = "localhost";
    $username = "danifer1_usuario";
  	$password = "studereplataforma2020";
	$dbname = "danifer1_grupos";


	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";
#SELECT * FROM $materia WHERE Nombre LIKE '%$palabra%' OR descripcion LIKE '%$palabra%' 
	  $query = "";
    if (isset($_POST['caja_busqueda'])) {
		$materia = $_POST['seleccion'];
		$palabra = $_POST['caja_busqueda'];
    	$q = $conn->real_escape_string($palabra);
    	$query = "SELECT * FROM $materia WHERE Nombre LIKE '%$palabra%' OR descripcion LIKE '%$palabra%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<div class='course_info table-responsive'>
		<table class='table-responsive'>
			<thead class='courses_search_input'>
				<th class='courses_search_input'>Pack de Clase</th>
				<th class='courses_search_input'>Horario</th>
				<th class='courses_search_input'>Dias</th>
				<th class='courses_search_input'>Precio</th>
	 
			</thead>
			<tbody>";

			while($fila = mysqli_fetch_assoc($resultado)){
    		$salida.="<tr>                                  
			<td class='courses_search_input'> <a target='_blank' href='./clases/bachillerato/registra_fatc.php?id=".$fila['Nombre']."&materia=".$materia."&precio=".$fila['Precio'].",00&id2=".$fila['id']."'>".$fila['Nombre'].".</a></td>
				<td  class='courses_search_input'>$fila[Horario]</td>
				<td class='courses_search_input'>$fila[Dias]</td>
				<td class='courses_search_input'>$fila[Precio]</td>
				
			</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.='<div class="course_info ">
		<li>No hemos encontrado resultados con la palabra o frase utilizada. </li><li>Intenta escribir varias palabras a la vez </li><li>Busca en otra materia, talves en historia no está </li><li>En el peor de los casos la clase o tema que buscas no se ha añadido o esta siendo actualizada</li><table>
		<tbody>
		
		<tr class="courses_search_input"> 
											 
																							
										  
										  </tr> 
		</tbody>
									</table>
									<br>
									<br>
									</div>';
    }


    if(empty($_POST['seleccion'])){
		echo "<li><b>¡Hola!</b> Escoge una asignatura y luego completa el formulario con las palabras que desees buscar.<br></li>";
	}else{
		echo $salida;
	}

    $conn->close();



?>