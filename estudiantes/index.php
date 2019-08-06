<?php

include '../conexion/conexion.php';
if(!empty($_REQUEST['buscar']))
{
    $buscar=$_REQUEST['buscar'];
    $query="SELECT * FROM alumno WHERE nombre_completo LIKE'%$buscar%'";
    $registros=mysqli_query($conexion,$query);
}
else
{
    $query="SELECT * FROM alumno";
    $registros=mysqli_query($conexion,$query);
}
?>

<?php
    include '../include/header.php';
?>
    <header class="">
        <div class="container" style="background-color: #062c33; color:white">
            <h1>Alumnos</h1>
        </div>
    </header>
<div id="botonIngresar">
    <a href="form_ingresar.php">Ingresar</a>
</div>
<form action="index.php" method="get">
    <div class="form-group">
        <input type="text" name="buscar" style="position: relative; left: 1020px; top: -85px;">
        <button id="botonBuscar" type="submit" name="Buscar">Buscar:</button>
    </div>
</form>
<table align="center" border="1" class="table-hover">
    <thead class="container" style="background-color: #062c33; color: #ffffff">
    <tr>
        <td rowspan="2">Codigo Alumno</td>
        <td rowspan="2">Nombre Completo</td>
        <td rowspan="2">Correo</td>
        <td rowspan="2">Clase</td>
        <td colspan="2" style="text-align: center">Acciones</td>
    </tr>
    <tr>
        <td >Modificar</td>
        <td>Eliminar</td>
    </tr>
    </thead>
    <tbody class="container" style="background-color: #6c757d; color: #ffffff">
    <?php
    while($row=mysqli_fetch_array($registros))
    {
        ?>
        <tr>
            <td><?php echo $row['id_alumno'];?></td>
            <td><?php echo $row['nombre_completo'];?></td>
            <td><?php echo $row['correo'];?></td>
            <td><?php
                switch ($row['codigo_curso'])
                {
                    case 1:echo"PHP";
                        break;
                    case 2:echo"ASP";
                        break;
                    case 3:echo"Java Script";
                        break;
                }
                ?>
            </td>
            <td>
                <a title="Modificar" href="form_modificar.php?id_alumno=<?php echo $row['id_alumno']; ?>">
                    <img src="../img/modificar.png" width="30" height="30">
                </a>
            </td>
            <td>
                <a title="Eliminar" href="eliminar.php?id_alumno=<?php echo $row['id_alumno']; ?>">
                    <img src="../img/eliminar.png" width="30" height="30">
                </a>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>



<?php
include '../include/footer.php';
?>

