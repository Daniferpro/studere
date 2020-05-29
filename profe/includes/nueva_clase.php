<?php
$nombre = $_POST['nombre_clase'];
$precio = $_POST['precio'];
$dias = $_POST['dias'];
$plataforma = $_POST['plataforma'];

$materia = $_POST['materia'];#materia del profesor que creala clase
$id_profe = $_POST['id_profe'];


    $nuevo_registro = "INSERT INTO `$materia` (`id`, `nombre_clase`, `precio`, `temas`,`Descripcion`, `alumnos` , `profesor`) 
                        VALUES (NULL, '$nombre', '$precio', '$plataforma', '$dias', '0', '$id_profe' )";
    ciclobasicoSQL($nuevo_registro);

      echo '
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script
     src="https://code.jquery.com/jquery-3.4.1.min.js"
     integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
     crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
       
     <script type="text/javascript">
    
    toastr.error("Mensaje : :  ' . $dato . ' ' . ' ya esta registrado en la plataforma, Intenta nuevamente", "ALERTA:", {
      "closeButton": true,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": true,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "15000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    });
    
    </script>
    ';
    
        ?>

