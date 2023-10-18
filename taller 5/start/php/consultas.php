<a href="registrar.php?mensaje=iniciar&usuario=&password=">registrar usuario</a>
<br>
<a href="iniciar.php?mensaje=iniciar&usuario=&password=">iniciar</a>
<?php
require('../class/funciones.php');
 $clase = new consultas;
 echo $clase->consultas();
 ?>