<?php

class Mensajes_plataforma{

public $mensaje;


//construc
public function __construct(){}

####### Devolvera un mensaje correspondiente a la hora del usuario ##########
public function mostrarMensajeSegunHora($userName){
    date_default_timezone_set('America/Montevideo'); #seteamos la hora de referencia
    $actual_hour = date('H'); #obtenemos solo la hora en formato de 24 hroas

    switch ($actual_hour) {
        // Inicio Buenas Noches usuario
        case '00':
            echo "Buenas Noches ".$userName;
            break;
        case '01':
            echo "Buenas Noches ".$userName;
            break;
        case '02':
            echo "Buenas Noches ".$userName;
            break;
        case '03':
            echo "Buenas Noches ".$userName;
            break;
        case '04':
            echo "Buenas Noches ".$userName;
            break;
        case '05':
            echo "Buenas Noches ".$userName;
            break;
        // Fin Buenas Noches Usuario
        // Inicio Buenos Dias Usuario
        case '06':
            echo "Buenos Días ".$userName;
            break;
        case '07':
            echo "Buenos Días ".$userName;
            break;
        case '08':
            echo "Buenos Días ".$userName;
            break;
        case '09':
            echo "Buenos Días ".$userName;
            break;
        case '10':
            echo "Buenos Días ".$userName;
            break;
        case '11':
            echo "Buenos Días ".$userName;
            break;
        case '12':
            echo "Buenos Días ".$userName;
            break;
        //Fin Buenos Días Usuario
        // Inicio Buenas Tardes Usuario
        case '13':
            echo "Buenas Tardes ".$userName;
            break;
        case '14':
            echo "Buenas Tardes ".$userName;
            break;
        case '15':
            echo "Buenas Tardes ".$userName;
            break;
        case '16':
            echo "Buenas Tardes ".$userName;
            break;
        case '17':
            echo "Buenas Tardes ".$userName;
            break;
        case '18':
            echo "Buenas Tardes ".$userName;
            break;
        case '19':
            echo "Buenos Tardes ".$userName;
            break;
        // Fin Buenas Tardes Usuario
        // Inicio Buenas Noches Usuario
        case '20':
            echo "Buenos Noches ".$userName;
            break;
        case '21':
            echo "Buenos Noches ".$userName;
            break;
        case '22':
            echo "Buenos Noches ".$userName;
            break;
        case '23':
            echo "Buenos Noches ".$userName;
                    
        default:
            echo "Bienvenid@ ".$userName;
            break;
    }
    
}


}

############## USUARIO #################


class Alumno{

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
    public function __construct($id_alumno){
       
        $dato = mysqli_fetch_assoc(consultarSQL(" SELECT * FROM usuario WHERE id='$id_alumno' "));
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

        if($campo == 'Contraseña'){ #si se va a modificar la contraseña primero la encriptamos
            $valor = hash('sha512', $valor);
        }

        $id_alumno = $this->identificador;
        consultarSQL("UPDATE usuario SET $campo='$valor' WHERE id='$id_alumno'");

    }


}
