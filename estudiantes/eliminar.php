<?php

include '../conexion/conexion.php';

$id_alumno=$_REQUEST['id_alumno'];
$sqlEliminar="DELETE FROM alumno WHERE id_alumno=$id_alumno";
$resultado=mysqli_query($conexion, $sqlEliminar);

if($resultado)
{
    echo"<h1>El registro se ha eliminado</h1>";
}
else
{
    echo"<h1>El registro no se ha eliminado</h1>";
}
echo "<a href='index.php'>Regresar</a>";
?>
