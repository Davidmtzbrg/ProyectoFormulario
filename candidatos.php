<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Registro</title>
    <!--css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="Prospecto.php">Registros</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="registros.php">Evaluacion De Prospectos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="candidatos.php">Prospectos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="card bg-primary  text-center text-white">
                        <h4>Prospectos Registrados</h4>
                    </div>
                </div>
            </div>

            <?php

           include "controladores/conexion.php";
            $consulta = $conexion->query("SELECT * FROM prospecto");
            $row = mysqli_num_rows($consulta);

            ?>
            <form action="consulta.php" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table" style="text-align: center;">
                                <thead>
                                    <tr>
                                        
                                        <th scope="col">Seleccion</th>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido Paterno</th>
                                        <th scope="col">Apellido Materno</th>
                                        <th scope="col">Estatus</th>
                                        <th scope="col">Observaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($registros = $consulta->fetch_assoc()) { ?>

                                        <tr>
                                        <td>
                                                <input type="checkbox" name="IdsUsuarios[]"
                                                    value="<?php echo $registros['id_usuario'] ?>" required/>
                                            </td>
                                        <td>
                                                <?php echo mb_strtoupper($registros['id_usuario']); ?>
                                            </td>
                                           
                                            <td>
                                                <?php echo mb_strtoupper($registros['nombre']); ?>
                                            </td>
                                            <td>
                                                <?php echo mb_strtoupper($registros['apellido1']); ?>
                                            </td>
                                            <td>
                                                <?php echo mb_strtoupper($registros['apellido2']); ?>
                                            </td>
                                           
                                            <td>
                                                <?php echo mb_strtoupper($registros['estatus']); ?>
                                            </td>

                                            <td>
                                                <?php echo mb_strtoupper($registros['comentario']); ?>
                                            </td>

                                        </tr>
                                    <?php }
                                    ?>

                                </tbody>
                            </table>
                            <div class="col-12">
                                <input class="btn btn-primary" type="submit" name="consulta" value="Consulta">
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </form>
        </div>

    </section>


</body>

</html>