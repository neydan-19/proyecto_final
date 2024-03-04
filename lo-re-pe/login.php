<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/login.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="icon"  type="img/png" href="../img/nike_logo.webp"/>
  <title>Inicio de Sesión</title>
  <style>
    .contendor-icon-login a img{
     width: 120px;
     position: absolute;
     top: 10px;
     left: 10px;
}
  </style>
</head>

<body>
  <?php
  require("../Config/conexion.php");
  $sql = $conexion->query("SELECT * FROM usuario");

  $resultado = $sql->fetch_assoc();
  ?>

  <?php
  session_start();
  if (isset($_SESSION['msj'])) {
    $respuesta = $_SESSION['msj'];
    unset($_SESSION['msj']);

  ?>
    <script>
      Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "El usuario no existe",
        footer: '<a href="#">Has olvidado tu contraseña?</a>'
      });
    </script>
  <?php
  }
  ?>
  <div class="contendor-icon-login">
    <a href="../index.php" ><img src="../img/nike_logo.webp" alt="logo"></a>
  </div>

  <div class="contenedor">
    <img class="imagen-login" src="./zapatillas-aire.jpg" alt="imagen-zapatilla">


    <form action="../Controller/verificar.php" method="POST">
      <h4 class="text-center">INICIAR SESION</h4>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo</label>
        <input type="email" class="form-control" name="Correo-Login" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="Constraseña-Login" required>
        <div id="emailHelp" class="form-text mt-4"><a class="contra" href="#">Has olvidado tu contraseña?</a> </div>
      </div>
      <div class="mb-3 form-check">
        <a href="./register.php" class="link_register">¿No tienes una cuenta? <u><b>Unete aqui.</b></u></a>
      </div>
      <button type="submit" class="btn btn-primary mt-4 enviar">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </div>
</body>

</html>