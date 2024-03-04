<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/perfil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" type="img/png" href="../img/nike_logo.webp" />
    <title>Perfil</title>
    <style>
        table {
            width: 80% !important;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 2px solid;
            text-align: center;
        }

        th,
        td {
            padding: 8px;
        }

        .cambio a {
            text-decoration: none;
            color: white;
            font-size: 20px;
            margin-left: 10px;
            padding: 2px 5px;
            border-radius: 5px;
            background-color: skyblue;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['msj'])) {
        $respuesta1 = $_SESSION['msj'];
        unset($_SESSION['msj']);

    ?>
        <script>
            Swal.fire({
                title: "Logeo Exitoso!",
                text: "Bienvenido!",
                icon: "success"
            });
        </script>
    <?php
    }
    ?>
    <?php
    if (isset($_SESSION['guardar'])) {
        $respuesta2 = $_SESSION['guardar'];
        unset($_SESSION['guardar']);

    ?>
        <script>
            Swal.fire({
                title: "Cambios Guardados Correctamente!",
                text: "Proceso Exitoso!",
                icon: "success"
            });
        </script>
    <?php
    }
    ?>
    <?php
    if (isset($_SESSION['falla'])) {
        $respuesta3 = $_SESSION['falla'];
        unset($_SESSION['falla']);

    ?>
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Cambio Invalido de Contraseña",
                footer: '<a href="#">Has olvidado tu contraseña?</a>'
            });
        </script>
    <?php
    }
    ?>
    <?php
    include_once("../Config/Conexion.php");
    $sql = "SELECT * FROM usuario WHERE correo = " . $_REQUEST['correo'];
    $resultado = $conexion->query($sql);

    $row = $resultado->fetch_assoc();

    $id_user = $row['id_usuario'];

    $sql2 = "SELECT * FROM orden WHERE id_usuario = " . $id_user;
    $resultado2 = $conexion->query($sql2);

    $total = $resultado2->num_rows;
    if ($total == 0) {
        $totalpaginas = 0;
    } else if ($total == 3) {
        $totalpaginas = 1;
    } else {
        $totalpaginas = intdiv($total, 3) + 1;
    }
    ?>
    <form action="../Controller/actualizar.php" method="POST">
        <header>
            <a href="../index.php" class="contenedor-img"><img src="../img/nike_logo.webp" alt="logo"></a>
        </header>
        <hr>
        <div class="container light-style flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-4">
                Configuraciones de la cuenta
            </h4>
            <div class="card overflow-hidden">

                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Cambiar Contraseña</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Informacion</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Notificaciones</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-ordens">Pedidos</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">
                                <div class="card-body media align-items-center">
                                    <img src="../img/usuario.png" alt class="d-block ui-w-80">
                                    <div class="media-body ml-4">
                                        <label class="btn btn-outline-primary">
                                            Actualizar Foto
                                            <input type="file" class="account-settings-fileinput">
                                        </label> &nbsp;
                                        <button type="button" class="btn btn-default md-btn-flat">Eliminar</button>
                                        <div class="text-light small mt-1" style="color: black !important;">Solo JPG, GIF o PNG. Max tamaño de 800K</div>
                                    </div>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Id: <?php echo $row['id_usuario'] ?></label>
                                        <input type="hidden" class="form-control" value="<?php echo $row['id_usuario'] ?>" name="Id">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" class="form-control" value="<?php echo $row['nombre'] ?>" name="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Apellido</label>
                                        <input type="text" class="form-control" value="<?php echo $row['apellido'] ?>" name="Apellido">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">E-mail</label>
                                        <input type="text" class="form-control mb-1" value="<?php echo $row['correo'] ?>" name="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-change-password">
                                <div class="card-body pb-2">
                                        <div class="form-group">
                                            <label class="form-label">Anterior Contraseña</label>
                                            <input type="password" class="form-control" name="verificacion" placeholder="Introducir contraseña actual">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Nueva contraseña</label>
                                            <input type="password" class="form-control" name="Contraseña" placeholder="Introducir contraseña nueva">
                                        </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-info">
                                <div class="card-body pb-2">
                                    <div class="form-group">
                                        <label class="form-label">Bio</label>
                                        <textarea class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Cumpleaños</label>
                                        <input type="date" class="form-control" value="<?php echo $row['fecha_nacimiento'] ?>" name="Cumpleaños">
                                    </div>
                                    <label for="">Genero</label>
                                    <select class="form-select mb-3" aria-label="Default select example" name="Genero">
                                        <option selected disabled>-- Seleccione el Genero --</option>
                                        <?php
                                        include("../Config/Conexion.php");

                                        $sql1 = "SELECT * FROM genero WHERE id_genero = " . $row['id_genero'];
                                        $resultado1 = $conexion->query($sql1);

                                        $row1 = $resultado1->fetch_assoc();

                                        echo "<option selected value =" . $row1['id_genero'] . ">" . $row1['genero'] . "</option>";

                                        $sql2 = "SELECT * FROM genero";
                                        $resultado2 = $conexion->query($sql2);

                                        while ($fila = $resultado2->fetch_array()) {
                                            echo "<option value =" . $fila['id_genero'] . ">" . $fila['genero'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                    <label for="">Tipo de Documento de Identidad</label>
                                    <select class="form-select mb-3" aria-label="Default select example" name="Documento">
                                        <option selected disabled>-- Seleccione el Tipo de Documento --</option>
                                        <?php
                                        include("../Config/Conexion.php");

                                        $sql1 = "SELECT * FROM tipo_documento WHERE COD_documento = " . $row['COD_documento'];
                                        $resultado1 = $conexion->query($sql1);

                                        $row1 = $resultado1->fetch_assoc();

                                        echo "<option selected value =" . $row1['COD_documento'] . ">" . $row1['Nombre_documento'] . "</option>";

                                        $sql2 = "SELECT * FROM tipo_documento";
                                        $resultado2 = $conexion->query($sql2);

                                        while ($fila = $resultado2->fetch_array()) {
                                            echo "<option value =" . $fila['COD_documento'] . ">" . $fila['Nombre_documento'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                    <br>
                                </div>
                                <hr class="border-light m-0">
                            </div>
                            <div class="tab-pane fade" id="account-notifications">
                                <div class="card-body pb-2">
                                    <h6 class="mb-4">Actividades</h6>
                                    <div class="form-group">
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input" checked>
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes"></span>
                                                <span class="switcher-no"></span>
                                            </span>
                                            <span class="switcher-label">Envíeme un correo electrónico cuando alguien comente mi artículo.</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input" checked>
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes"></span>
                                                <span class="switcher-no"></span>
                                            </span>
                                            <span class="switcher-label">Envíame un correo electrónico cuando alguien responda en mi hilo del foro.</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input">
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes"></span>
                                                <span class="switcher-no"></span>
                                            </span>
                                            <span class="switcher-label">Envíame un correo electrónico cuando alguien me siga</span>
                                        </label>
                                    </div>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body pb-2">
                                    <h6 class="mb-4">Aplicaciones</h6>
                                    <div class="form-group">
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input" checked>
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes"></span>
                                                <span class="switcher-no"></span>
                                            </span>
                                            <span class="switcher-label">Noticias y anuncios</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input">
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes"></span>
                                                <span class="switcher-no"></span>
                                            </span>
                                            <span class="switcher-label">Actualizaciones semanales de productos</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input" checked>
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes"></span>
                                                <span class="switcher-no"></span>
                                            </span>
                                            <span class="switcher-label">Resumen semanal del blog</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-ordens">
                                <br>
                                <h2 class="text-center" style="font-family:Verdana, Geneva, Tahoma, sans-serif">Registro de Pedidos Realizados</h2>
                                <br>
                                <form action="../Controller/load.php" method="POST">
                                    <input type="hidden" id="campo" value="<?php echo $row['id_usuario'] ?>">
                                </form>
                                <div class="row g-4 container">
                                    <div class="col-auto">
                                        <p style="color: black;display:inline-block">Registros encontrados</p>
                                        <input type="text" value="<?php echo $total ?>" disabled class="text-center" style="width: 30px;">
                                    </div>
                                    <div class="col-auto">
                                        <p style="color: black;display:inline-block">Paginas de registros disponibles</p>
                                        <input type="text" value="<?php echo $totalpaginas ?>" disabled class="text-center" style="width: 30px;" id="total_paginas">
                                    </div>
                                    <div class="col-auto cambio">
                                        <p style="color: black;display:inline-block">Cambiar Pagina</p>
                                        <a id="retroceder"> < </a>
                                        <a id="avanzar"> > </a>

                                    </div>
                                    <div class="col-auto">
                                        <input type="hidden" value="3" id="num_registros">
                                    </div>
                                </div>
                                <table class="container">
                                    <thead>
                                        <th>Num.Orden</th>
                                        <th>Nombre Producto</th>
                                        <th>Metodo de Pago</th>
                                        <th>Departamento</th>
                                        <th>Distrito</th>
                                        <th>Provincia</th>
                                    </thead>
                                    <tbody id="content">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right mt-3">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>&nbsp;
                <button type="button" class="btn btn-default">Cancelar</button>
            </div>

        </div>
    </form>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        //NO TOCAR POR NADA DEL MUNDO
        let paginaActual = 1

        getData(paginaActual)

        document.getElementById("campo").addEventListener("keyup", getData);
        document.getElementById("num_registros").addEventListener("change", getData);
        document.getElementById("avanzar").addEventListener("click", aumentar);
        document.getElementById("retroceder").addEventListener("click", disminuir);



        function aumentar() {
            let total = document.getElementById("total_paginas").value;
            if (!(paginaActual >= total)) {
                paginaActual = paginaActual + 1;
                getData(paginaActual)
            }
        }

        function disminuir() {
            let total = document.getElementById("total_paginas").value;
            if (!(paginaActual == 1)) {
                paginaActual = paginaActual - 1;
                getData(paginaActual)
            }
        }



        function getData(pagina) {
            let input = document.getElementById("campo").value
            let num_registros = document.getElementById("num_registros").value
            let content = document.getElementById("content")
            let url = "http://localhost/proyecto_final/Controller/load.php"
            let formData = new FormData()
            formData.append('campo', input)
            formData.append('registros', num_registros)
            formData.append('pagina', pagina)

            fetch(url, {
                    method: "POST",
                    body: formData
                }).then(Response => Response.json())
                .then(data => {
                    content.innerHTML = data
                }).catch(err => console.log(err))
        }
    </script>
</body>

</html>