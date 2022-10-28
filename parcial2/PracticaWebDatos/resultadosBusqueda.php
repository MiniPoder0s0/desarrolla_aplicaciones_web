<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
</head>
<body>
    <?php
        include 'conexion.php';
        include 'menu.php';

        if($_GET["termino"]== ""){

        
    ?>
        <br>
        <div class="alert alter-danger">No existen registros con ese término de búsqueda</div><br><br>
        <a href="consultarDatos.php"></a>

    <?php }else{
        $sql = "SELECT * FROM usuarios WHERE nombre LIKE'%" . $_GET["termino"] . "%'";
        $resultados = $conexion->query[$sql];
        if($datos->num_rows == 0){
            echo "<div class='alert alter-danger'>No existen registros con ese término de búsqueda</div>";
        }else{

        
    ?>
        <table>
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Domicilio</th>
                <th>Fecha de Nacimiento</th>
            </thead>
        </table>
        <tbody>
            <?php while($row = $datos->fetch_assoc()){ ?>
                <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td><?php echo $row["edad"]; ?></td>
                        <td><?php echo $row["sexo"]; ?></td>
                        <td><?php echo $row["domicilio"]; ?></td>
                        <td><?php echo $row["fecha_nacimiento"]; ?></td>
                        <td>
                            <a href="actualizarRegistro.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Editar</a>
                            <a href="eliminarDatos.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Eliminar</a>
                        </td>

                </tr>
            <?php } ?>
        </tbody>
    <?php }} ?>
</body>
</html>