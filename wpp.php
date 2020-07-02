<?php

if(isset($_POST['celular'])){

$mensaje = $_POST['mensaje'];
$celular = strval($_POST['celular']);
$celular = substr($celular,-8);
$numero_destino ="598" . $celular;

include_once "./includes/api_wpp.php";

  if(sendMensajeCurl($numero_destino, $mensaje)){

    $msg_usr = "SE HA ENVIADO EL MENSAJE CON ÉXITO";
  }else{

    $msg_usr = "OCURRIO UN ERROR Y NO SE HA ENVIADO EL MENSAJE";
  }


}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba wpp</title>
    <link rel="stylesheet" href="/styles/bootstrap4/bootstrap.min.css">
</head>
<body>
<form class="needs-validation" action="#" method="post" novalidate>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Numero</label>
      <input type="number" class="form-control" id="validationCustom01" min="091000000" max="099999999" placeholder="Ej: 093123456" name="celular" required>
      <div class="valid-feedback">
        Perfecto!
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Mensaje</label>
      <input type="text" class="form-control" id="validationCustom02" name="mensaje" placeholder="Escriba su mensaje" required>
      <div class="valid-feedback">
        Perfecto buen mensaje!
      </div>
    </div>
    
    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="true" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Acepto los terminos y condiciones clic aqui
      </label>
      <div class="invalid-feedback">
        Usted debe de aceptar los terminos antes de enviar el mensaje
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Enviar whatsapp</button>
</form>
<?php if(isset($_POST['celular'])){
  echo "
<button class='btn btn-primary' type='button'> ".$msg_usr."</button>
";
}?>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<script src=".\styles\bootstrap4\bootstrap.min.js"></script>
</body>
</html>