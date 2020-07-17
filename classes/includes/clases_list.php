<?php

function listarClasesAlumno($id_alumno){

    $bg_color = ['red', 'green','yellow','orange','red', 'green','yellow','orange','red', 'green','yellow','orange','blue', 'green','yellow','orange'];
    $color = 0;
    $materia1 = "";
    if($clases = consultarSQL("SELECT * FROM  clases WHERE Alumno=$id_alumno ")){
        
        while($clase = mysqli_fetch_assoc($clases)){
            $materia = $clase['materia'];
            // $color +=1;
            if($materia != $materia1){
                $color +=1;
                $materia1 = $materia;
            }
            
                   
                    echo '
                    
                    <section class="col-lg-4 connectedSortable">

                                        
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-'.$bg_color[$color].'">
                        <div class="widget-user-image">
                            <img class="img-circle" src="https://studere.uy/images/images/logoterminado.png" alt="User Avatar">
                        </div>
                        <!-- /.widget-user-image -->
                        <a href="#" class="cambioColor"><h4 class="widget-user-desc">'.$clase['Nombre_clase'].'</h4></a>
                        
                        </div>
                        <div class="box-footer no-padding">
                        <ul class="nav nav-stacked">
                            <li><a href="#">Finaliza el : <span class="  pull-right badge bg-blue">'.$clase['fecha_fin'].' </span></a></li>
                            <li><a href="#">Materia: <span class="pull-right badge bg-green">'.strtoupper($clase['materia']).'</span></a></li>
                            <li><a href="#">Estado: <span class="pull-right badge bg-orange">'.strtoupper($clase['estado']).'</span></a></li>
                
                        </ul>
                        </div>
                    </div>
                        <!-- /.widget-user -->
                        

                    </section>
                ';
            

        }
    
    }
}





































?>