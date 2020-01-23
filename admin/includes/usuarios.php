<?php
// include "./conecciones.php";
$query = consultarSQL(" SELECT * FROM usuario ORDER BY id DESC LIMIT 10");
while ($usuario = mysqli_fetch_assoc($query)):
?>

<html>

    <tr>
    <td><?php echo $usuario['id']; ?></td>
    <td><a href="./detalle_usuario.php?id=<?php echo $id . "&userid=" . $usuario['id']; ?>"><?php echo $usuario['Nombre'] . " " . $usuario['Apellido'] ;?></a></td>

    <td><?php if($usuario['token'] == 1){ echo '<span class="label label-success">' . "VERIFICADO" . '</span>';}else{  echo '<span class="label label-danger">' . "PENDIENTE" . '</span>';} ?></td>
    <td>
        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $usuario['Email']; ?></div>
    </td>
    <td>
        <div class="sparkbar" data-color="#00a65a" data-height="20">
        <?php  if($usuario['materias'] == "admin"){
                    echo "Admin";
                }elseif($usuario['materias'] == ""){
                    echo "Estud";
                }else{echo "Profe";}
         ?></div>
    </td>
    </tr>

</html>

<?php endwhile;?>