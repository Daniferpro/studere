<?php


$cantidad_materias = gruposSQL("SHOW TABLES")->num_rows; #numero de materias
$materias = [];
$bg_color = ['red', 'blue', 'green','yellow','orange','red', 'blue', 'green','yellow','orange','red', 'blue', 'green','yellow','orange','red', 'blue', 'green','yellow','orange'];
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
            
            
                
                if($mi_variable == 0){
                    $profesor = mysqli_fetch_assoc(consultarSQL("SELECT * FROM usuario WHERE materias='$asd' "));
                echo '
                <div class="panel box box-primary">
                <div class="box-header with-border">
                  <h4 class="box-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.strtoupper($asd).'" aria-expanded="true" class="">
                    '.strtoupper($asd).'
                    </a>
                  </h4>
                </div>
                <div id="collapse'.strtoupper($asd).'" class="panel-collapse collapse in" aria-expanded="true" style="">
                  <div class="box-body">
                    
               
                   
                    ';
                                        
                    $sql = gruposSQL("SELECT * FROM $asd");
                    while($clase = mysqli_fetch_assoc($sql)){
                    echo '
                    
                    <section class="col-lg-4 connectedSortable">

                                        
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-'.$bg_color[$i].'">
                        <div class="widget-user-image">
                            <img class="img-circle" src="https://studere.uy/images/images/logoterminado.png" alt="User Avatar">
                        </div>
                        <!-- /.widget-user-image -->
                        <h4 class="widget-user-desc">'.$clase['Nombre'].'</h4>
                        <h5 class="widget-user-desc">'.$profesor['Nombre']. " " . $profesor['Apellido'].'</h5>
                        </div>
                        <div class="box-footer no-padding">
                        <ul class="nav nav-stacked">
                            <li><a href="#">Días: <span class="pull-right badge bg-blue">'.$clase['Dias'].' </span></a></li>
                            <li><a href="#">'.$clase['descripcion'].'</a></li>
                            <li><a href="#">Precio: <span class="pull-right badge bg-green">$'.$clase['Precio'].'</span></a></li>
                
                        </ul>
                        </div>
                    </div>
                        <!-- /.widget-user -->
                        

                    </section>
                ';}
                $mi_variable = $mi_variable + 1;;
               echo '
               </div>
             </div>
           </div>'; }
            

        }
    }
}





































?>