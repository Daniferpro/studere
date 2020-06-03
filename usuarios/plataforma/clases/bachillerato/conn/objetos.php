<?php


class Grupo{

    //atributos

    public $identificador;
    public $link_vc;
    public $horario;
    public $contraseña_vc;
    public $nombre;
    public $dia_inicio;
    public $dia_fin;
    public $descripcion;
    public $precio;
 
   
    
    
    //construc
    public function __construct($id_grupo,$materia){
       
        $dato = mysqli_fetch_assoc(gruposSQL(" SELECT * FROM $materia WHERE id='$id_grupo' "));
        $this->identificador = $dato['id'];
        $this->link_vc = $dato['link_vc'];
        $this->horario = $dato['Horario'];
        $this->contraseña_vc = $dato['Contraseña_vc'];
        $this->nombre = $dato['Nombre'];
        $this->dia_inicio = $dato['dia_inicio'];
        $this->dia_fin = $dato['dia_fin'];
        $this->descripcion = $dato['descripcion'];
        $this->precio = $dato['Precio'];

       
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

      


    }


}
?>
