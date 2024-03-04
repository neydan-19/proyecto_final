<?php

include_once("../Config/conexion.php");

$correoL = $_POST['Correo-Login'];
$contraL = $_POST['Constraseña-Login'];


$sql = "SELECT * FROM usuario WHERE correo = '$correoL' AND contraseña = '$contraL'";

$resultado = mysqli_query($conexion, $sql);

if (!$resultado) {

        echo mysqli_error($mysqli);

        exit;
}

if ($user = mysqli_fetch_assoc($resultado)) {
        header("location:../lo-re-pe/perfil.php?correo='" . $correoL . "'");
        session_start();
        $_SESSION['msj'] = "Datos correctos, Bienvenido!!!";
} else {
        header("location:../lo-re-pe/login.php");
        session_start();
        $_SESSION['msj'] = "Información incorrecta, el usuario o contraseña son incorrectos";
}
