<a href="registrar.php?mensaje=iniciar&usuario=&password=">registrar usuario</a>
<br>
<a href="../sesion.php?mensaje=consultas">consultar usuarios</a>
<br>
<?php
if(isset($_GET['mensaje'])){
    require('../class/funciones.php');
    $usuario = $_GET['usuario'];
    $password = $_GET['password'];
    $clase = new consultas;
    echo $clase->consultarpersona($usuario, $password);
}
?>
<br>
<a href="borrar.php?usuario=<?php echo $usuario ?>">borrar usuario</a>