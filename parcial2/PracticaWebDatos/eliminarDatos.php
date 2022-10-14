<?php 

    Include 'conexion.php';
    $id = $_GET["id"];
    $sql = "DELETE from usuarios where id = ".$id;
    
    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";

    }else{
        echo "Error: ".$sql. "<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }
?>