<?php
$id_alumno = $_SESSION['id'];
$user_list = consultarSQL("SELECT * FROM usuario WHERE materias!='' ");
$user_l = []; #array en array : $user_l[numero][nombre] y [apellido] y [materia]


while($user = mysqli_fetch_assoc($user_list)){

    $user_l [] = [$user['id'], $user['Nombre'], $user['Apellido'], $user['materias']];

}

$i = 0;
$numero = count($user_l); 

while($numero > $i){

    $user_id = $user_l[$i][0];
    $userFullName = $user_l[$i][1] . " " . $user_l[$i][2];
    $userCat = $user_l[$i][3]; 
    echo
    '
    <li><a href="read-mail.php?id='.$id_alumno.'&id_alumno='.$user_id.'"><i class="fa fa-user-o"></i>'.$userFullName."  ".'<i class="fa fa-long-arrow-right"></i>'.strtoupper($userCat) .'</a></li>
    ';

    $i++;
}
if($numero == 0){
    echo

            '
            <li><a href=#"><i class="fa fa-user-o"></i> Upss! Aun No tienes usuarios para enviarle mensajes</a></li>
            
            ';

}










?>