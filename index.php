<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php y msql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--importacion de bootstrap-->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Roboto&family=Rubik+Burned&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" media="all" href="style.css" />
</head>

<body>
    <!--Animacion de fondo-->
    <?php
    #siempre al hacer un llamado tenemos que instanciar la coneccion ya sea en el cuerpo index o en el controlador.
    include "modelo/conexion.php";

    ?>
    <div class="container-fluid m-2 row">
        <form class="form_registro col-4 p-4 m-4 " method="POST">
            <!--estos formularios siempre tiene que tener el metodo _POST-->

            <div class="row mt-2 mb-2">
                <div class="col">
                    <h3 class="text-center mt-2"><strong>Sistema de registro</strong></h3>
                </div>



            </div>


            <?php
            include "modelo/conexion.php";
            include "controlador/registro_persona.php";
            include "controlador/eliminar_persona.php";
            ?>
            <div class="row mb-3">
                <div class="col ">
                    Nombre:
                    <input type="text" class="form-control input-1" name="nombre" placeholder="¿Tu nombre?">
                    <!--cada uno de los campos un nombre para la manipulacion en php-->
                </div>
                <div class="col ">
                    Apellido
                    <input type="text" class="form-control input-1" name="apellido" placeholder="¿Tu apellido?">
                </div>
            </div>

            <div class="row  mb-3">
                <div class="col">
                    Codigo:
                    <input type="number" class="form-control input-2" name="cc" placeholder="CC, DNI, RNM.">
                </div>
                <div class="col ">
                    Fecha de nacimiento
                    <input type="date" class="form-control input-2" name="fecha_nacimiento" placeholder="DD/MM/AA">
                </div>
            </div>

            <div class=" mb-3">
                E-mail:
                <input type="email" class="form-control input-3" name="correo" placeholder="Digita tu correo.">
            </div>

            <div class="d-flex justify-content-center"><button type="submit" class="btn btn-primary" name="btnregistrar"
                    value="ok">Registrar</button>
                <script>history.replaceState(null, null, location.pathname);</script>
            </div>


        </form>

        <div class="head-table col-7  pt-3 ">
            <table class="table m-2">
                <thead class="table-primary"> <!--Color not funt-->
                    <tr class=" text-center">
                        <th scope="col datos-head text-center">#</th>
                        <th scope="col datos-head">Nombre</th>
                        <th scope="col datos-head">Apellido</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col ">Correo</th>
                        <th scope="col">Editar o eliminar Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <!--Abrimos a conecao com o banco de dados-->
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("select * from persona");
                    while ($datos = $sql->fetch_object()) //recorrer los datos.
                    { ?>

                        <tr>

                            <th>
                                <?= $datos->id_empleado; ?>
                            </th>
                            <td>
                                <?= $datos->nombre; ?>
                            </td>
                            <td>
                                <?= $datos->apellido; ?>
                            </td>
                            <td>
                                <?= $datos->cc; ?>
                            </td>
                            <td>
                                <?= $datos->fecha_nacimiento; ?>
                            </td>
                            <td>
                                <?= $datos->correo; ?>
                            </td>
                            <td class="">
                                <a href="modificar_persona.php?id=<?= $datos->id_empleado ?>"
                                    class="btn btn-small btn-warning mb-1"> <!--?id para mandar ese valor-->

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                    </svg>
                                    </i></a>
                                <!--se esta enviando el id en ina variable id ?id=...= $datos->id_empleado -->
                                <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_empleado ?>"
                                    class="btn btn-small btn-danger mb-1">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                        <path
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                    </svg> </a>
                            </td>


                        </tr>
                        <?php

                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>

    <div class="area">



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
    <script src="script.js"></script>
</body>

</html>