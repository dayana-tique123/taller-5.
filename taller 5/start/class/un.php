<?php
function consultarpersona($connexion, $usuario, $password){
    $salida = '';
    $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $resultado = $connexion->query($consulta);
    if($resultado == true){
        if($resultado->num_rows > 0){
            $salida = 1;
        }else{
            $salida = 0;
        }
    }else{
        $salida = 'fallo en la cosunlta';
    }
    return $salida;
}

function ingresarpersona($connexion, $usuario, $password){
    $salida = '';
    $ingresar = "INSERT INTO usuarios(nombres, usuario, email, password, numero) VALUES('nose', '$usuario', 'ffegmail.com','$password', '3324')";
    $resultado = $connexion->query($ingresar);
    if($resultado == true){
        $salida = 'datos ingresados correctamnete';
    }else{
        $salida = 'no se ingreso nada mala consulta';
    }
    return $salida;
}

?>
