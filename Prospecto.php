<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Registro</title>
    <!--css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
         <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <nav class="navbar navbar-expand-lg bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="Prospecto.php">Registros</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="registros.php">Evaluacion De Prospectos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="candidatos.php">Prospectos</a>
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
                <div class="col-md-4"></div>
                <div class="col-md-12">

                    <div class="w-80 border m-3 p-3">
                        <div class="card bg-primary text-center text-white">
                            <h3>Formulario de Registro</h3>
                        </div>
                        <br>
                        <!-- #region <form class="row g-3 needs-validation" name="Formulario" id="Formulario" action="controladores/registro.php" method="post" > -->
                        <form class="row g-3 needs-validation" action="controladores/registro.php" method="POST" enctype="multipart/form-data" >
                            <div class="col-md-4">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input autocomplete="off" type="text" class="form-control" name="nombre" id="nombre" required>
                            </div>
                            <div class="col-md-4">
                                <label for="ApellidoPaterno" class="form-label">Apellido Paterno</label>
                                <input autocomplete="off" type="text" class="form-control" name="ApellidoPaterno" id="ApellidoPaterno"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label for="ApellidoMaterno" class="form-label">Apellido Materno</label>
                                <input autocomplete="off" type="text" class="form-control" name="ApellidoMaterno" id="ApellidoMaterno">
                            </div>

                            <div class="col-md-4">
                                <label for="Calle" class="form-label">Calle</label>
                                <input autocomplete="off" type="text" class="form-control" name="calle" id="Calle" required>
                            </div>

                            <div class="col-md-4">
                                <label for="numero" class="form-label">Numero</label>
                                <input autocomplete="off" type="text" class="form-control" name="numero" id="numero" required>
                            </div>

                            <div class="col-md-4">
                                <label for="colonia" class="form-label">Colonia</label>
                                <input autocomplete="off" type="text" class="form-control" name="colonia" id="colonia" required>
                            </div>
                            <div class="col-md-4">
                                <label for="postal" class="form-label">Codigo Postal</label>
                                <input autocomplete="off" type="text" class="form-control" name="postal" id="postal" required>
                            </div>
                            <div class="col-md-4">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input autocomplete="off" type="text" class="form-control" name="telefono" id="telefono" required  maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />

                            </div>

                            <div class="col-md-4">
                                <label for="rfc" class="form-label">RFC</label>
                                <input autocomplete="off" type="text" class="form-control" name="rfc" id="rfc" required>
                            </div>

                            <div class="col-sm-8">
                                <label for="documentos" class="form-label">Nombre Docuentos</label>
                                <input autocomplete="off" type="text" class="form-control" name="documento" id="documeno" required>
                                <br>
                                <input type="file" class="form-control" id="miarchivo[]" name="miarchivo[]" aria-label="Archivo" multiple="">
                            </div>
                            <!-- Se agrego el nombre del boton name-->
                            <div class="col-12">
                                <input class="btn btn-primary" type="submit" name="subir" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>