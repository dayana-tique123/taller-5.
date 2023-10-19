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
        $exit = '';

        $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
        $resultado = $this->connexion->query($consulta);
        if($resultado == true){
            if($resultado->num_rows > 0){
                while($fila = $resultado->fetch_assoc()){
                    $nombres = $fila['nombres'];
                    $email = $fila['correo'];
                    $salida = 'nombres del usuario: '. $nombres.' y su correo es: '. $email;
                }
            }else{
                $exit = 'no se encontro el usuario registrate';
            }
        }else{
            $exit = 'mala consulta';
        } 
        return $exit;
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
        $exit = '';
        $consulta = "SELECT * FROM usuarios";
        $resultado = $this->connexion->query($consulta);
        if($resultado == true){
            if($resultado->num_rows > 0){
                while($fila = $resultado->fetch_assoc()){
                    $exit .= '<br>'. $fila['usuario']. '--- '. $fila['correo'];
                    $exit .= '<br>';
                }
            }else{
                $exit = 'no hay filas encontradas';
            }
        }else{
            $exit = 'mala consulta';
        }

        return $exit;
    }

    public function eliminardatos($usuario){
        $exit = '';
        $borrar = "DELETE FROM usuarios WHERE usuario='$usuario'";
        $resultado = $this->connexion->query($borrar);
        if($resultado == true){
            $exit = 'eliminado el usuario';
        }else{
            $exit = ' eliminado erroneo';
        }
        return $exit;
    }
}

?>