<?php
include "modelo/conexion.php";
#recojer id

$id = $_GET["id"];
#echo $id;

$sql = $conexion->query("select * from persona where id_empleado=$id"); #error


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="stylemod.css">
</head>

<body>


    <div class="area">
        <a href="index.php" class="">
            <button type="submit" class="btn-voltar " value="ok"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill m-1" viewBox="0 0 16 16">
  <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1"/>
</svg>Volver
            </button>
        </a>
        <form class="col-6 " method="POST">
            <!--estos formularios siempre tiene que tener el metodo _POST m-auto para centralizar-->
            <h3 class="text-center mt-2 text-secondary">Modificar informacion de personas</h3>
            <!-- con la parte de abajo recuperamos nuestro id y en el tipo hidden es para ocultarlo-->
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">

            <?php
            include("controlador/modificar_persona.php"); #llamado de el controlador.
            while ($datos = $sql->fetch_object()) { #esos registros quiero que se almacenen en la variable datos
                ?>
                <div class="mb-3 text-center">
                    <label for="exampleInputEmail1" class="form-label">Nombre de la persona.</label>
                    <input type="text" class="form-control input-1 " name="nombre" value="<?= $datos->nombre ?>">
                    <!--cada uno de los campos un nombre para la manipulacion en php-->
                </div>
                <div class="mb-3 text-center">
                    <label for="exampleInputEmail1" class="form-label">Apellido de la persona.</label>
                    <input type="text" class="form-control input-2" name="apellido" value="<?= $datos->apellido ?>">
                </div>
                <div class="mb-3 text-center">
                    <label for="exampleInputEmail1" class="form-label">Cedula de la persona.</label>
                    <input type="number" class="form-control input-3" name="cc" value="<?= $datos->cc ?>">
                </div>
                <div class="mb-3 text-center">
                    <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento de la persona.</label>
                    <input type="date" class="form-control input-4" name="fecha_nacimiento"
                        value="<?= $datos->fecha_nacimiento ?>">
                </div>
                <div class="mb-3 text-center">
                    <label for="exampleInputEmail1" class="form-label">Correo de la persona.</label>
                    <input type="email" class="form-control input-5" name="correo" value="<?= $datos->correo ?>">
                </div>
                <?php
            }
            ?>



            <button type="submit" class="btn btn-primary" name="btnmodificardatos" value="ok">Modificar datos</button>
        </form>

        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>