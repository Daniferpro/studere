<?php

// configuracion de los cursos a mostrar si los hay 

if(isset($_POST['palabra'])){

										
    require_once "includes/coneccionbdclases.php";
    require_once "includes/buscadormiscursos.php";
    
}
// consulta0 es hecha en miscursos.php configmiscursos.php
            
if($consulta0->num_rows>0){ 

$fecha_hoy= date("Y-m-d");
$fecha_curso=$assoc['fecha_fin'];




echo " <div class='courses_container'>
<div class='row courses_row'>
<div class='col-lg-12 course_col' align='center'>
<h2>Lista de tus clases</h2>

</div>";




while($cursos = mysqli_fetch_assoc($consulta0)){


if($fecha_hoy < $cursos['fecha_fin']){

$numero= rand(1,2);

echo " 

<!-- Course -->
<div class='col-lg-4 course_col'>

<div class='course'>
<div class='course_image'><img src='images/clase_1.jpg' width='100%' alt=''></div>
<div class='course_body'>
<h5 class='course_title'><a href='clases/1bc/materias/$cursos[materia]/temas/$cursos[Nombre_clase]/'>$cursos[Nombre_clase]</a></h5>
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
    <span>Fin :$cursos[fecha_fin] </span>
</div>

<div class='course_price ml-auto'> ACTIVO</div>
</div>
</div>
</div>

</div>
";}else{
    echo " 

    <!-- Course -->
    <div class='col-lg-4 course_col'>

        <div class='course'>
            <div class='course_image'><img src='images/clase_2.jpg' width='100%' alt=''></div>
            <div class='course_body'>
                <h5 class='course_title'><a href='clases/1bc/procesos/pago_clase?id=$cursos[Nombre_clase]&materia=$cursos[materia]&id2=$cursos[id]'>$cursos[Nombre_clase]</a></h5>
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
                    
                    <div class=' ml-auto'> VENCIDO</div>
                </div>
            </div>
        </div>
        
        </div>";
}
}
echo "</div>
</div>";


}
else{echo "<div class='courses_container'>
<div class='row courses_row'>
<div class='col-lg-12 course_col' align='center'>
<h2>No tienes clases o Cursos registrados</h2></div>
<div class='col-lg-12 course_col'>
<h5>Puedes ir a la lista de las materias habilitadas y elegir un curso!</h5>
<br>

<a href='./clases/1bc/'> <button class='courses_search_button'>Cursos disponibles</button> </a>
</div></div></div>";}


?>