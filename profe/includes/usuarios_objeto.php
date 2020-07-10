<?php


class Usuario{

    //atributos

    public $identificador;
    public $nombre;
    public $apellido;
    public $email;
    public $celular;
    public $materia;
    public $estado;
    public $pass;
    public $token;
    
    //construc
    public function __construct($id){
       
        $dato = mysqli_fetch_assoc(consultarSQL(" SELECT * FROM usuario WHERE id='$id' "));
        $this->identificador = $dato['id'];
        $this->nombre = $dato['Nombre'];
        $this->apellido = $dato['Apellido'];
        $this->email = $dato['Email'];
        $this->celular = $dato['Celular'];
        $this->materia = $dato['materias'];
        $this->estado = $dato['estado'];
        $this->pass = $dato['Contraseña'];
        $this->token = $dato['token'];
        $this->clases = [];
        $this->clases_num = 0;
        
        
    }

   
 



    public function clasesUser(){
        $clases = $this->clases;
        $id = $this->identificador;
        $cantidad = $this->clases_num;
        $clase = consultarSQL(" SELECT * FROM clases WHERE Alumno=$id");
        while($course = mysqli_fetch_assoc($clase)){

            $clases[] = $course['Nombre_clase'];
            
        }
        $cantidad = $clase->num_rows;
        return $this->clases_num;
        return $cantidad;

        
}

#agregamos algunas variables luego de estas funciones;

    

    public function actualizar($campo, $valor){

        $id = $this->identificador;
        consultarSQL("UPDATE usuario SET $campo='$valor' WHERE id='$id'");

       
 

    }
    public function eliminar(){

        $id = $this->identificador;
        consultarSQL("DELETE FROM usuario WHERE id='$id'");

       echo '<script type="text/javascript"> 
       alert("Usted ha eliminado al USUARIO")
       windows.header.location "./detalle_usuario.php?id=1&userid=3"
       </script>';


    }


}
?>
