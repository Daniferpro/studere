<?php

include "./conn/conecciones.php";
include "./conn/objetos.php";

$cantidad_materias = gruposSQL("SHOW TABLES")->num_rows; #numero de materias
$materias = [];
$sql = gruposSQL("SHOW TABLES");
while($materias_1 = mysqli_fetch_assoc($sql)){
    $materias[] = $materias_1;
}


for ($i=0; $i <$cantidad_materias ; $i++) { 
    $materia = $materias[$i];
    $asd = $materia['Tables_in_grupos'];
    if(gruposSQL("SELECT * FROM  $asd ")){
        $consulta2 = gruposSQL("SELECT * FROM $asd");
        $mi_variable = 0;
        while($materia_detalle = mysqli_fetch_assoc($consulta2)){
            
            if($materia_detalle['nivel'] == 4 | $materia_detalle['nivel'] == 5 | $materia_detalle['nivel'] == 6){
                
                if($mi_variable == 0){
                    $profesor = mysqli_fetch_assoc(consultarSQL("SELECT * FROM usuario WHERE materias='$asd' "));
                echo '
                
                
                <div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><a href="./materias.php?id='.$asd.'&profe='.$profesor['Nombre'].' '.$profesor['Apellido'].'"><img src="../../images/'.$asd.'.jpg" alt=""></a></div>
									<div class="course_body">
										<h3 class="course_title"><a href="./materias.php?id='.$asd.'&profe='.$profesor['Nombre'].' '.$profesor['Apellido'].'">'.strtoupper($asd).'</a></h3>
										<div class="course_teacher">'.$profesor['Nombre'].' '. $profesor['Apellido'].'</div>
										<div class="course_text">
											<p>Ver las Clases habilitadas para esta asignatura</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											
											<div class="course_price ml-auto">FECHA DE INICIO CLASES: MIÉRCOLES 10 DE JUNIO</div>
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