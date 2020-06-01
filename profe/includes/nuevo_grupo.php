<?php
$nombre= $_POST['nombre'];
$horario = $_POST['horario'];
$dia_inicio = $_POST['dia_inicio'];
$dia_fin = $_POST['dia_fin'];
$link = $_POST['link'];
$pass = $_POST['contraseña'];
$descripcion = $_POST['descripcion'];

$materia = $_POST['materia'];#materia del profesor que creala clase
$id_profe = $_POST['id_profe'];


    $nuevo_registro = "INSERT INTO `$materia` (`id`, `Nombre`,`link_vc`, `Contraseña_vc`, `Horario`,`descripcion`, `dia_inicio` , `dia_fin`, `Precio`) 
                        VALUES (NULL, '$nombre', '$link', '$pass', '$horario', '$descripcion', '$dia_inicio', '$dia_fin','0' )";
   
    if( gruposSQL($nuevo_registro)){

      echo '
      <script
     src="https://code.jquery.com/jquery-3.4.1.min.js"
     integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
     crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
       
     <script type="text/javascript">
    
    toastr["success"]("EL Grupo a quedado Registrado Exitosamente!", "Genial")

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
    </script>
    ';}
    
        ?>

