<?php
function consultar3SQL($query){
$coneccion=new mysqli("sql311.byethost.com", "b22_24096764", "daniferpro", "b22_24096764_bachillerato_d1");
if(mysqli_connect_errno()){
    echo "Problemas en la Coneccion de Base de Datos";
}
$coneccion->set_charset("utf8");
$coneccion->autocommit(FALSE);
$coneccion->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
if($consulta=$coneccion->query($query)){
        if( $coneccion->commit()){
        
        }else{
            echo"No se han guardado los datos";
        }
        }else{
        $coneccion->rollback();
        
}
    return $consulta;
}


?>