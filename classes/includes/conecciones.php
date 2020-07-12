<?php


// conecciones con las funciones 
//consutarSQL( para los usuarios y sus clases)
//consultacharSQL( para el chat )
//consultaclasesSQL( para las consultas a lista de materias y clases )
//comentariosSQL() para consultas para mostrar los comentarios.

// coneccion a la base PARAPRUEBAS

function consultarSQL($query){
$coneccion=new mysqli("localhost", "root", "", "parapruebas");
if(mysqli_connect_errno()){
    echo "Problemas en la Coneccion de Base de Datos";
}
$coneccion->set_charset("utf8");
$coneccion->autocommit(FALSE);
$coneccion->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
if($consulta=$coneccion->query($query)){
        if( $coneccion->commit()){
        
        }else{
            echo"No se han realizado la consulta a la base de datos";
        }
        }else{
        $coneccion->rollback();
        
}
    return $consulta;
}


// conecciones con las funciones 
//consutarSQL( para los usuarios y sus clases)
//consultacharSQL( para el chat )
//consultaclasesSQL( para las consultas a lista de materias y clases )
//comentariosSQL() para consultas para mostrar los comentarios.

// coneccion a la base PARAPRUEBAS



// CONECCION A OTRA BD
// coneccion a la base Chatusuarios

function consultachatSQL($query){
    $coneccion=new mysqli("localhost", "root", "", "chatusuarios");
    if(mysqli_connect_errno()){
        echo "Problemas en la Coneccion de Base de Datos";
    }
    $coneccion->set_charset("utf8");
    $coneccion->autocommit(FALSE);
    $coneccion->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
    if($consulta=$coneccion->query($query)){
            if( $coneccion->commit()){
            
            }else{
                echo"No se han realizado la consulta a la base de datos";
            }
            }else{
            $coneccion->rollback();
            
    }
        return $consulta;
    }

    // CONECCION A OTRA BD
// coneccion a la base materias y clases

function consultaclasesSQL($query){
    $coneccion=new mysqli("localhost", "root", "", "bachillerato_d1");
    if(mysqli_connect_errno()){
        echo "Problemas en la Coneccion de Base de Datos";
    }
    $coneccion->set_charset("utf8");
    $coneccion->autocommit(FALSE);
    $coneccion->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
    if($consulta=$coneccion->query($query)){
            if( $coneccion->commit()){
            
            }else{
                echo"No se han realizado la consulta a la base de datos";
            }
            }else{
            $coneccion->rollback();
            
    }
        return $consulta;
    }
    

    // CONECCION A OTRA BD
// coneccion a la base Comentarios

function comentariosSQL($query){
    $coneccion=new mysqli("localhost", "root", "", "comentarios");
    if(mysqli_connect_errno()){
        echo "Problemas en la Coneccion de Base de Datos";
    }
    $coneccion->set_charset("utf8");
    $coneccion->autocommit(FALSE);
    $coneccion->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
    if($consulta=$coneccion->query($query)){
            if( $coneccion->commit()){
            
            }else{
                echo"No se han realizado la consulta a la base de datos";
            }
            }else{
            $coneccion->rollback();
            
    }
        return $consulta;
    }
    // CONECCION A OTRA BD
// coneccion a la base grupos

function gruposSQL($query){
    $coneccion=new mysqli("localhost", "root", "", "grupos");
    if(mysqli_connect_errno()){
        echo "Problemas en la Coneccion de Base de Datos";
    }
    $coneccion->set_charset("utf8");
    $coneccion->autocommit(FALSE);
    $coneccion->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
    if($consulta=$coneccion->query($query)){
            if( $coneccion->commit()){
            
            }else{
                echo"No se han realizado la consulta a la base de datos";
            }
            }else{
            $coneccion->rollback();
            
    }
        return $consulta;
    }

    // CONECCION A OTRA BD
// coneccion a la base profesores

function profesoresSQL($query){
    $coneccion=new mysqli("localhost", "root", "", "profesores");
    if(mysqli_connect_errno()){
        echo "Problemas en la Coneccion de Base de Datos";
    }
    $coneccion->set_charset("utf8");
    $coneccion->autocommit(FALSE);
    $coneccion->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
    if($consulta=$coneccion->query($query)){
            if( $coneccion->commit()){
            
            }else{
                echo"No se han realizado la consulta a la base de datos";
            }
            }else{
            $coneccion->rollback();
            
    }
        return $consulta;
    }
    
    // CONECCION A OTRA BD
// coneccion a la base ciclo_basico

function ciclobasicoSQL($query){
    $coneccion=new mysqli("localhost", "root", "", "ciclo_basico");
    if(mysqli_connect_errno()){
        echo "Problemas en la Coneccion de Base de Datos";
    }
    $coneccion->set_charset("utf8");
    $coneccion->autocommit(FALSE);
    $coneccion->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
    if($consulta=$coneccion->query($query)){
            if( $coneccion->commit()){
            
            }else{
                echo"No se han realizado la consulta a la base de datos";
            }
            }else{
            $coneccion->rollback();
            
    }
        return $consulta;
    }
    
    


    

    

?>

