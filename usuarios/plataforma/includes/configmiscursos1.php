<?php

// configuracion de los cursos a mostrar si los hay 

if(isset($_POST['palabra'])){

										
    require_once "includes/coneccionbdclases.php";
    require_once "includes/buscadormiscursos.php";
    // require_once "../../profe/includes/conecciones.php";
    
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
    $profe_id = $cursos['Profesor'];
    $profesor = mysqli_fetch_assoc(consultarSQL("SELECT * FROM usuario WHERE id=$profe_id"));
    $materia = strtoupper($profesor['materias']);
    $profesor = $profesor['Nombre']. " " . $profesor['Apellido'];

if($fecha_hoy < $cursos['fecha_fin'] && $cursos['estado'] == "activo"){

$numero= rand(1,2);

echo " 

<!-- Course -->
<div class='col-lg-6 course_col'>

<div class='course'>
<div class='course_image'><img src='images/clase_1.jpg' width='100%' alt=''></div>
<div class='course_body'>
<h5 class='course_title'><a href='estudiando/index.php?materia=$cursos[materia]&tema=$cursos[Nombre_clase]&id_clase=$cursos[id_clase]'>$cursos[Nombre_clase]</a></h5>
<div class='course_teacher'>Prof: $profesor</div>
<div class='course_price ml-auto'>Esta clase finaliza el día: $cursos[fecha_fin]  </div>
<div class='course_text'>
<p></p>
</div>
</div>
<div class='course_footer'>
<div class='course_footer_content d-flex flex-row align-items-center justify-content-start'>
<div class='course_info'>
  
    <span>Materia:</span>
</div>

<div class='course_price ml-auto'> $materia</div>
</div>
</div>
</div>

</div>
";}if($fecha_hoy < $cursos['fecha_fin'] & $cursos['estado'] == "Pendiente"){

    $numero= rand(1,2);
    
    echo " 
    
    <!-- Course -->
    <div class='col-lg-6 course_col'>
    
    <div class='course'>
    <div class='course_image'><img src='images/clase_4.jpg' width='100%' alt=''></div>
    <div class='course_body'>
    <h5 class='course_title'><a href='#'>$cursos[Nombre_clase]</a></h5>
    <div class='course_teacher'>$profesor</div>
    
    <div class='course_text'>
    <p></p>
    </div>
    </div>
    <div class='course_footer'>
    <div class='course_footer_content d-flex flex-row align-items-center justify-content-start'>
    <div class='course_info'>
        <i class='fa fa-graduation-cap' aria-hidden='true'></i>
        <span>$cursos[fecha_fin] </span>
    </div>
    
    <div class='course_price ml-auto'>PENDIENTE</div>
    </div>
    </div>
    </div>
    
    </div>
    ";}elseif($cursos['estado'] == "vencido"){
        
    echo " 

    <!-- Course -->
    <div class='col-lg-6 course_col'>

        <div class='course'>
            <div class='course_image'><img src='images/clase_2.jpg' width='100%' alt=''></div>
            <div class='course_body'>
                <h5 class='course_title'><a href='clases/bachillerato/procesos/pago_clase?id=$cursos[Nombre_clase]&materia=$cursos[materia]&id2=$cursos[id]'>$cursos[Nombre_clase]</a></h5>
                <div class='course_teacher'>$profesor</div>
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

<a href='./'> <button class='courses_search_button'>Cursos disponibles</button> </a>
</div></div></div>";}


?>