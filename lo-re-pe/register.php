<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/register.css">
  <link rel="icon"  type="img/png" href="../img/nike_logo.webp"/>
  <style>
    .contendor-icon-register a img{
     width: 120px;
     height: 80px;
     position: absolute;
     top: 10px;
     left: 10px;
}
  </style>
  <title>Registrarse</title>
</head>

<body>
  <div class="contendor-icon-register">
    <a href="../index.php"><img src="../img/nike_logo.webp" alt="logo"></a>
  </div>
  <div class="contenedor">
    <img class="" src="./zapatilla-medias.jpg" alt="imagen-zapatilla">


    <form action="../Controller/registrando.php" method="POST">
      <h4 class="text-center">REGISTRARSE</h4>
      <div class="mb-3 mt-4">
        <label for="exampleInputName1" class="form-label">Nombres</label>
        <input type="text" class="form-control" id="exampleInputname" aria-describedby="emailHelp" required name="nombre">
      </div>
      <div class="mb-3">
        <label for="exampleInputlastname1" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="exampleInputlastname" aria-describedby="emailHelp" required name="apellido">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo</label>
        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" required name="correo">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" required name="clave">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">He leido y acepto <a href="https://www.nike.com.pe/politicas-de-privacidad.html"><u><b>la Politica de
                privacidad</b></u></a> y <a href="https://www.nike.com.pe/terminos-y-condiciones.html"><u><b>los terminos y condiciones</b></u></a></label>
      </div>
      <button type="submit" class="btn btn-primary mt-4" name="registro">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
  </div>


</body>

</html>