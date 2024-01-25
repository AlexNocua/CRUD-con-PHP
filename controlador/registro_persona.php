<?php

if (!empty($_POST["btnregistrar"])) { //if the user have pressing of bottom...
    if (!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["cc"]) and !empty($_POST["fecha_nacimiento"]) and !empty($_POST["correo"])) #validar cada uno de los datos 
    {
        # code...


        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $cc = $_POST["cc"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $correo = $_POST["correo"];

        #echo $nombre;

        $sql = $conexion->query(" INSERT INTO persona (nombre, apellido, cc, fecha_nacimiento, correo)
         VALUES ('$nombre', '$apellido',  $cc,  '$fecha_nacimiento', '$correo')");


        if ($sql == 1) {
            echo '<div class="alert alert-success text-center">Registro correcto.</div>';

        } else {
            echo '<div class="alert alert-danger text-center" >Ocurrio algun error.</div>';
        }

    } else {
        echo "<div class='alert alert-warning text-center'>Alguno de los campos estan vacio.</div>";
    }


}
?>