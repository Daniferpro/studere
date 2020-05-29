<?php


class Grupo{

    //atributos

    public $identificador;
    public $link_vc;
    public $link_vc_grabada;
    public $horario;
    public $dia;
    public $contraseña_vc;
    public $contraseña_vc_grabada;
    public $grupo;
    
    
    //construc
    public function __construct($grupo,$materia){
       
        $dato = mysqli_fetch_assoc(gruposSQL(" SELECT * FROM $materia WHERE grupo='$grupo' "));
        $this->identificador = $dato['id'];
        $this->link_vc = $dato['link_vc'];
        $this->link_vc_grabada = $dato['link_vc_grabada'];
        $this->horario = $dato['Horario'];
        $this->dia = $dato['Dia'];
        $this->contraseña_vc = $dato['Contraseña_vc'];
        $this->contraseña_vc_grabada = $dato['Contraseña_vc_grabada'];
        $this->grupo = $dato['grupo'];
        $this->materia = $materia;
        
        
        
    }

   

    public function actualizar($campo, $valor){

        $id = $this->identificador;
        $materia = $this->materia;
        gruposSQL("UPDATE $materia SET $campo='$valor' WHERE id='$id'");

       
 

    }
    public function eliminar(){

        $id = $this->identificador;
        $materia = $this->materia;
        gruposSQL("DELETE FROM $materia WHERE id='$id'");

       echo '<script type="text/javascript"> 
       alert("Usted ha eliminado al USUARIO")
       
       </script>';


    }


}
?>
