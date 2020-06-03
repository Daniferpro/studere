<?php

include "./conn/conecciones.php";
include "./conn/objetos.php";

$cantidad_materias = gruposSQL("SHOW TABLES")->num_rows; #numero de materias
$materias = mysqli_fetch_all(gruposSQL("SHOW TABLES"));

for ($i=0; $i <$cantidad_materias ; $i++) { 
    $materia = $materias[$i];
    if(gruposSQL("SELECT * FROM $materia[0] ")){
        $consulta2 = gruposSQL("SELECT * FROM $materia[0]");
        while($materia_detalle = mysqli_fetch_assoc($consulta2)){
            $mi_variable = 0;
            if($materia_detalle['nivel'] == 4 | $materia_detalle['nivel'] == 5 | $materia_detalle['nivel'] == 6){
            
                if($mi_variable == 0){
                    $profesor = mysqli_fetch_assoc(consultarSQL("SELECT * FROM usuario WHERE materias='$materia[0]' "));
                echo '
                
                
                <div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><a href="./materias.php?id='.$materia[0].'"><img src="../../images/'.$materia[0].'.jpg" alt=""></a></div>
									<div class="course_body">
										<h3 class="course_title"><a href="./materias.php?id='.$materia[0].'">'.$materia[0].'</a></h3>
										<div class="course_teacher">'.$profesor['Nombre'].' '. $profesor['Apellido'].'</div>
										<div class="course_text">
											<p>Acceso a Clases por medio de Video Conferencias</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>Etudiantes</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>5 Ratings</span>
											</div>
											<div class="course_price ml-auto">Pack</div>
										</div>
									</div>
								</div>
							</div>
                ';
                $mi_variable = $mi_variable + 1;;
                }
            }

        }
    }
}
































?>