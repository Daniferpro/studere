<?php
require "./PHPMailer.php";
require "./SMTP.php";
require "./Exception.php";
require "./OAuth.php";

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mensaje = "ENviar correos desde aqui.";
if(isset($_POST['email'])){

$destinatario = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$texto = filter_var($_POST['texto'], FILTER_SANITIZE_STRING);

$mail->isSMTP();
$mail->SMTPDebug = 3;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Username = "daniferpro3@gmail.com";
$mail->Password = "daniferpro2016";
$mail->setFrom('daniferpro3@gmail.com','Studere.uy');
$mail->addAddress($destinatario);
$mail->Subject = "Activacion de cuenta studere";
$mail->Body = $texto;
$mail->isHTML(false);





if(!$mail->send()){
    $mensaje= "No se ha enviado el mensaje";
}else{
    $mensaje="se ha enviado correctamente el mensaje";
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>email</title>
</head>
<body>
    <div class="container" style="">
        <form action="#" method="post">
            <input type="email" name="email" id="email" required="true" placeholder="Email destinatario">
            <input type="text" size="80" id="texto" name="texto" required="true" placeholder="Mensaje a enviar">
            <input type="submit" action="submit" value="submit ">
        </form>
<?php
        echo $mensaje;
?>

    </div>
</body>
</html>