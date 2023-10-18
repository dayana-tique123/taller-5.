<a href="../start.php">volver</a>

<?php
require('../class/funciones.php');
$borrar = new consultas;
$usuario = $_GET['usuario'];
echo $usuario;
echo $borrar->borrardatos($usuario);
?>