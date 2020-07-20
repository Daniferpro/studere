<?php  
                  
                  if(isset($_REQUEST['comentario_form'])){

                    if(!empty($_REQUEST['comentario_form'])){
                 
                  $fecha = date('d/m/Y');

                  comentariosSQL("INSERT INTO post (`id`, `usuario`, `comentario`, `fecha`, `clase`) VALUES (NULL, '$nombre_apellido', '$_POST[comentario]', '$fecha', '$clase');");
                    }else{ echo '
                                <div class="info-box">
                                    <span class="info-box-icon bg-red"><i class="fa fa-comments-o"></i></span>
                    
                                  <div class="info-box-content">
                                    <span class="info-box-text">Comentario NO enviado</span>
                                    <span class="info-box-number">No puedes enviar un comentario vacío.. </span>
                                  </div>
                              
                                </div>
                                '; }
                   }?>