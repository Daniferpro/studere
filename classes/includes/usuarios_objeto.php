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
        if(!isset($_SESSION)){
            session_start();
        }
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
        $_SESSION['token'] = md5(uniqid(mt_rand(), true));
        $this->tk = $_SESSION['token'];
        $_SESSION['email'] = $this->email;
               
    }

   




    public function clasesUser(){
        $id = $this->identificador;
        $clase = consultarSQL(" SELECT * FROM clases WHERE Alumno=$id");
        while($course = mysqli_fetch_assoc($clase)){
            
        }





}

    public function actualizar($campo, $valor){

        $id = $this->identificador;

        if($campo == 'Contraseña'){
            $valor = hash("sah512", $valor);
        }
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
