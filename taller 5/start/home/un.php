<?php

function consultarpersona( $usuario, $password){

    $exit = '';
    $consulta = "SELECT * FROM usuarios WHERE usuario='$usuario'";
    $resultado = $connexion->query($consulta);
    if($resultado == true){
        if($resultado->num_rows > 0){
            $exit = 1;
        }else{
            $exit = 0;
        }
    }else{
        $exit = 'Error  en la consulta';
    }
    return $exit;
}

function ingresarpersona( $usuario, $password){
    $exit = '';
    $conn=new msqli('localhost','root','','proyecto_tours_people')
    $ingresar = "INSERT INTO usuarios(nombres, usuario, Correo, password, numero) VALUES('no lo se ', '$usuario', 'dtique@.com','$password', '35924')";
    $resultado = $connexion->query($ingresar);
    if($resultado = true){
        $exit = 'datos ingresados satisfactoriamente';
    }else{
        $exit = 'no se a ingreso nada, mala consulta';
    }
    return $exit;
}

?>
