<?php
/**
 * Created by PhpStorm.
 * User: Jonatan Moncada
 * Date: 29/7/2019
 * Time: 19:13
 */

include '../conexion/conexion.php';

$id_alumno=$_REQUEST['id_alumno'];

$sql="select * from alumno where id_alumno='$id_alumno'";
$registro=mysqli_query($conexion,$sql);
$row=mysqli_fetch_array($registro);
?>
<html>
<head>
    <title>Modificar Alumno</title>
    <link rel="stylesheet" type="text/css" href="../Boostrap/css/bootstrap.min.css">
    <link href="../Estetica/estiloIndex.css" rel="stylesheet">
    <meta name="viewport" content="width-device-width">
</head>
<body>
<div class="formularioAlumno">
    <h4 style="text-align: center;">EDICION DE ALUMNO</h4>
    <form class="container" action="modificar.php" method="post">
        <input type="hidden" name="id_alumno" value="<?php echo $row['id_alumno'] ?>">

        <label>Nombre Completo:</label>
        <input type="text" name="nombre_completo" value="<?php echo $row['nombre_completo'] ?>">

        <p></p>
        <label>Correo:</label>
        <br>
        <input type="email" name="correo" value="<?php echo $row['correo'] ?>">
        <p></p>
        <label>Clase:</label>
        <br>
        <select name="codigo_curso">
            <?php
            $sql="select * from curso";
            $registro=mysqli_query($conexion,$sql);
            while($reg=mysqli_fetch_array($registro))
            {
                if($row['codigo_curso']==$reg['codigo_curso'])
                {
                    echo "<option selected value=\"$reg[codigo_curso]\">$reg[nombre_curso]</option>";
                }
                else
                {
                    echo "<option value=\"$reg[codigo_curso]\">$reg[nombre_curso]</option>";
                }
            }
            ?>
        </select>
        <p></p>
            <button id="botonGuardarEdicion" type="submit" name="guardar">Modificar</button>
        <p></p>
            <button id="botonCancelarEdicion"><a href="index.php">Cancelar</a></button>
    </form>
</div>
</body>
</html>
