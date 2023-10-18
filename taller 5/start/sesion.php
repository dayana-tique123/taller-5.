<?php
if(isset($_GET['mensaje'])){
    $mensaje = $_GET['mensaje'];
     if($mensaje == 'iniciar'){
      header('location: php/iniciar.php?mensaje&usuario=&password=');
     }else if($mensaje == 'registar'){
      header('location: php/registrar.php?mensaje&usuario=&password=');
     }else if($mensaje == 'consultas'){
      header('location: php/consultas');
     }

}
?>