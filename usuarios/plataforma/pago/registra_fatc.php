<?php 
 require_once 'conn/conn.php';
 
 // Aqui voc� tras junto com POST ou GET o ID do produto para montar a fatura
 // Para buscar por ex o valor e o produto que �
 // Aqui tamb�m voc� tras o id do usuario que est� gerando est� fatura
 
//  obtenemos x get el nombre de la clase y la materia enviada desde index.php en el buscador
 $materia=$_GET['materia'];
 $nombreclase=$_GET['id'];


 // obtenemos x GET el id del usuario
 $id_user = $_GET['usuario'];
 //Vamos pegar a data para adicionar a fatura
 $data = date('d/m/Y');
 // Valor de la clase a comprar enviado x GET ? precio =$fila['precio'];
 $s = $_GET['precio']; // Neste formato o mercado pago aceita
 
  function formata($y){
    $a = str_replace('.','',$y); //  1.000,00 => 1000,00
    $b = str_replace(',','.',$a); // 1000,00 => 1000.00 || 140,00 => 140.00
    return $b;
  }
  
  $valor = formata($s);
  
   //Vamos criar uma referencia  (essa ser� nossa referencia passada para o mercado pago)
   $ref = rand(1,9999).$id_user; // Ex: 53801
  
  //Status recebe Pendente
  $status = "Pendiente";
  // Forma recebe MP
  $forma  = "Mercado Pago";
 
  //Registrar a fatura
  $sql = mysqli_query($conn,"INSERT INTO fatura (`id_user`, `ref`, `forma`, `data`, `valor`, `status`) VALUES ('$id_user','$ref','$forma','$data','$valor','$status')");
  if($sql){
      //Buscar esta factura en la base de datos
      $query = mysqli_query($conn,"SELECT * FROM `fatura` WHERE ref='$ref' LIMIT 1");
      if($query){
        $fat = mysqli_fetch_assoc($query);
        $id = $fat['ref'];
        echo "<script>location.href='procesos/pago_clase.php?id=$nombreclase&materia=$materia';</script>";
      }else{
        echo "<script>location.href='index.php?ERROR';</script>";
      }

  }else{
      echo "<script>location.href='index.php?ERROR1';</script>";
    }



?>