<?php 

// Aqui registramos la factura de la clase a comprar con un estatus PENDIENTE, generamos unaa referencia aleatoria para envio de informacion y manipulacion 
// de clases en nuestra plataforma en base a la respuesta de la compra en Mercado Pago


 require_once './conn/conn.php';
 require_once '../../../../admin/includes/conecciones.php';


 
//  obtenemos x get el nombre de la clase y la materia enviada desde index.php en el buscador.
 $materia=$_GET['materia'];
 $nombreclase=$_GET['id'];
 $id_clase = $_GET['id2'];
 
 
  $id_user = $_POST['email_annon'];// obtenemos x GET el id del usuario



 
 $profe = consultarSQL("SELECT * FROM usuario WHERE materias='$materia'");
 $profe = mysqli_fetch_assoc($profe);
 $profe_id = $profe['id'];
 $data = 0;

 $s = $_GET['precio']; // Valor de la clase a comprar, enviado x GET ? precio =$fila['precio'];

 //formateo el precio del curso a vender obtenido.
 
  function formata($y){
    $a = str_replace('.','',$y); //  1.000,00 => 1000,00
    $b = str_replace(',','.',$a); // 1000,00 => 1000.00 || 140,00 => 140.00
    return $b;
  }
  
  $valor = formata($s);
  
   //Aqui creamos una referencia  (esta es enviada a mercado pago el cual nos devuelve la info con esta referencia)
   $ref = rand(1,9999).time(); // Ex: 53801
  
  //Status recive Pendiente
  $status = "Pendiente";
  // Forma de recibir MP
  $forma  = "Mercado Pago";
 
  //Registramos la factura
  $sql = mysqli_query($conn,"INSERT INTO fatura (`id_user`, `ref`, `forma`, `data`, `valor`, `producto`, `materia`, `status`, `comprobante`, `identificador_compra`, `id_clase` ) 
  VALUES ('$id_user','$ref','$forma','$profe_id ','$valor', '$nombreclase', '$materia', '$status', 'esperando confirmacion de Pago', '', '$id_clase')");
  if($sql){
      //Buscar esta factura en la base de datos
      $query = mysqli_query($conn,"SELECT * FROM `fatura` WHERE ref='$ref' LIMIT 1");
      if($query){
        $fat = mysqli_fetch_assoc($query);
        $id = $fat['ref'];
        $email_hasheado = md5($id_user);
        echo "
        <form action='procesos/pago_clase_nlo.php?id=$nombreclase&materia=$materia&id2=$_GET[id2]&ref=$ref&session_status=annon' method='post' id='form_fact'>
        <input type='hidden' value='".$id_user."' name='email_user'>
        </form>
        
        <script>document.getElementById('form_fact').submit();
        </script>";
      }else{
        echo "<script>location.href='index.php?ERROR';</script>";
      }

  }else{
      echo "<script>location.href='index.php?ERROR1';</script>";
    }

  

?>