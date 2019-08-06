<?php

include "../conexion/conexion.php";

$nombre_completo=$_REQUEST['nombre_completo'];
$correo=$_REQUEST['correo'];
$codigo_curso=$_REQUEST['codigo_curso'];

$sql="insert into alumno(nombre_completo,correo,codigo_curso) VALUES('$nombre_completo','$correo',$codigo_curso)";

$resultado=mysqli_query($conexion,$sql)or die("Problemas en el select".mysqli_error($conexion));

if($resultado)
{
    echo'<h2>Registro guardado exitosamente</h2>';
}
else
{
    echo'<h2>Problemas al guardar</h2>';
}

?>
<button><a href="form_ingresar.php">Regresar</a></button>


