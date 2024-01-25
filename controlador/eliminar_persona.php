<?php


if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query("delete from persona where id_empleado = $id");
    if ($sql == 1) {
        echo "<div class = 'alert alert-success'>Persona eliminada correctamente</div>";
    }
} else {
    #echo "<div type ='hidden'>Error al eliminar</div>";

}




?>