<?php

include "./conn/conecciones.php";
include "./conn/objetos.php";
$materia = $_GET['id'];
$sql = gruposSQL("SELECT * FROM $materia");
while($clase = mysqli_fetch_assoc($sql)){
	
	if($clase['nivel'] >3){
                echo '
                
                
                <div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image">
										<a href="./registra_fatc.php?id='.$clase['Nombre'].'&materia='.$materia.'&usuario='.$a['id'].'&precio='.$clase['Precio'].',00&id2='.$clase['id'].'">
										<img src="../../images/clase_1.jpg" alt="">
										</a>
									</div>
									<div class="course_body">
										<h3 class="course_title"><a href="./registra_fatc.php?id='.$clase['Nombre'].'&materia='.$materia.'&usuario='.$a['id'].'&precio='.$clase['Precio'].',00&id2='.$clase['id'].'">
										'.strtoupper($clase['Nombre']).'</a></h3>
										<div class="course_teacher">'.$clase['Dias'].'</div>
										<div class="course_text">
											<p>'.$clase['Horario'].'</p>
											<p>'.$clase['descripcion'].'</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-graduation-cap" aria-hidden="true"></i>
												<span>Estudiantes</span>
											</div>
											<div class="course_info">
												<i class="fa fa-star" aria-hidden="true"></i>
												<span>OFERTA </span>
											</div>
											<div class="course_price ml-auto">$'.$clase['Precio'].'</div>
										</div>
									</div>
								</div>
							</div>
                ';
            
        }
}































?>