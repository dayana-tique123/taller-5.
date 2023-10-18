<?php
require('../database/db.php');
class consultas extends createconnexion{
    public $connexion;

    public function __construct()
    {
        $this->connexion = $this->getconnect();
    }

    public function consultarpersona($usuario, $password)
    {
        $salida = '';

        $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
        $resultado = $this->connexion->query($consulta);
        if($resultado == true){
            if($resultado->num_rows > 0){
                while($fila = $resultado->fetch_assoc()){
                    $nombres = $fila['nombres'];
                    $email = $fila['email'];
                    $salida = 'nombres del usuario: '. $nombres.' y su email es: '. $email;
                }
            }else{
                $salida = 'no se encontro el usuario registrate';
            }
        }else{
            $salida = 'mala consulta';
        } 
        return $salida;
    }

    public function registar($usuario, $password){
        $retornar = '';
        include('../class/un.php');
        if(consultarpersona($this->connexion, $usuario, $password) == 1){
            $retornar = 'ya exitse el suario';
        }else{
            ingresarpersona($this->connexion, $usuario, $password);
            $retornar = 'usuario ingresado';
        }
        return $retornar;
    }

    public function consultas(){
        $salida = '';
        $consulta = "SELECT * FROM usuarios";
        $resultado = $this->connexion->query($consulta);
        if($resultado == true){
            if($resultado->num_rows > 0){
                while($fila = $resultado->fetch_assoc()){
                    $salida .= '<br>'. $fila['usuario']. '--- '. $fila['email'];
                    $salida .= '<br>';
                }
            }else{
                $salida = 'no hay filas encontradas';
            }
        }else{
            $salida = 'mala consulta';
        }

        return $salida;
    }

    public function borrardatos($usuario){
        $salida = '';
        $borrar = "DELETE FROM usuarios WHERE usuario='$usuario'";
        $resultado = $this->connexion->query($borrar);
        if($resultado == true){
            $salida = 'borrado el usuario';
        }else{
            $salida = 'salio mal el borrado';
        }
        return $salida;
    }
}

?>