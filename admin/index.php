<?php
if(isset($_GET['materia'])){
    $materia = $_GET['materia'];
    $id = $_GET['id'];
    header ('Location: ./admin.php?materia='.$materia.'&id='.$id.'');

}else{
    header ("Location: ../");
}
?>