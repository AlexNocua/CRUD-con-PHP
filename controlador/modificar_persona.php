<?php


if (!empty($_POST["btnmodificardatos"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cc"]) and !empty($_POST["fecha_nacimiento"]) and !empty($_POST["correo"])) { #verificar que cada uno de los datos no este vacio.
        #
        $id = ($_POST["id"]);
        $nombre = ($_POST["nombre"]);
        $apellido = ($_POST["apellido"]);
        $cc = ($_POST["cc"]);
        $fecha_nacimiento = ($_POST["fecha_nacimiento"]);
        $correo = ($_POST["correo"]);
        #el id se recupera en el formulario de modificar personas.
        $sql = $conexion->query("update persona set nombre = '$nombre', apellido = '$apellido', cc = $cc, fecha_nacimiento = '$fecha_nacimiento', correo = '$correo' where id_empleado = $id"); #numero entero no se pone entre comillas.
        if ($sql == 1) {
            header("location:index.php");
            # code...
        } else {
            echo "<div class = 'alert alert-danger' >Error al modificar producto</div>";
        }
    } else {
        echo "<div class = 'alert alert-warning' >Campos vacios</div>";
    }
}



?>