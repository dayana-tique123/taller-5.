<a href="iniciar.php?mensaje=iniciar&usuario=&password=">iniciar</a>
<br>
<a href="../sesion.php?mensaje=consultas">consultar usuarios</a>
<br>
<?php
if(isset($_GET['mensaje'])){
    require('../class/funciones.php');
    $usuario = $_GET['usuario'];
    $password = $_GET['password'];
    $clase = new consultas;
    echo $clase->registar($usuario, $password);
}
?>