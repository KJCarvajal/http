<?php

include '../conexion/conexion.php';

$id_alumno=$_REQUEST['id_alumno'];
$nombre_completo=$_REQUEST['nombre_completo'];
$correo=$_REQUEST['correo'];
$codigo_curso=$_REQUEST['codigo_curso'];

$sqlModificar="update alumno set nombre_completo='$nombre_completo', correo='$correo',codigo_curso='$codigo_curso' WHERE id_alumno='$id_alumno'";
$resultado=mysqli_query($conexion,$sqlModificar);

if($resultado)
{
    echo"<h1>Registro Modificado</h1>";
}
else
{
    echo"<h1>Problemas al Modificar</h1>";
}

?>
<a href="index.php">Regresar</a>
