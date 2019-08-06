<?php

include '../conexion/conexion.php';
?>
<html>
<head>
    <title>Ingresar Alumno</title>
    <link rel="stylesheet" type="text/css" href="../Boostrap/css/bootstrap.min.css">
    <link href="../Estetica/estiloIndex.css" rel="stylesheet">
    <meta name="viewport" content="width-device-width">
</head>
<body>
<div class="formularioAlumno">
    <h4 style="text-align: center;">REGISTRO DE ALUMNO</h4>
    <form class="container" action="guardar.php" method="post">
        <label>Nombre Completo:</label>
        <input type="text" name="nombre_completo">
        <p></p>
        <label>Correo:</label>
        <input type="email" name="correo">
        <p></p>
        <label>Clase:</label>
        <br>
        <select name="codigo_curso">
            <?php
            $sql="select * from curso";
            $registro=mysqli_query($conexion,$sql);
            while($reg=mysqli_fetch_array($registro))
            {
                echo "<option value=\"$reg[codigo_curso]\">$reg[nombre_curso]</option>";
            }
            ?>
        </select>
        <p></p>
        <button id="botonGuardarEdicion" type="submit" name="guardar">Guardar</button>
        <p></p>
        <button id="botonCancelarEdicion"><a href="index.php">Cancelar</a></button>
    </form>
</div>
</body>
</html>

