<?php
    include_once("../Config/Conexion.php");
    session_start(); // Iniciar sesión al principio

    $id = $_POST['Id'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $correo = $_POST['Email'];
    $cumpleaños = $_POST['Cumpleaños'];
    $genero = $_POST['Genero'];
    $documento = $_POST['Documento'];
    $verificar = $_POST['verificacion'];
    $contra = $_POST['Contraseña'];

    // Validación de entrada básica (agrega más según sea necesario)
    if(empty($nombre) || empty($apellido) || empty($correo) || empty($cumpleaños) || empty($genero) || empty($documento) || empty($verificar) || empty($contra)) {
        $_SESSION['falla'] = "Por favor, rellena todos los campos requeridos.";
        header("Location: ../lo-re-pe/perfil.php?correo='".$correo."'");
        exit;
    }
// Actualización de datos del usuario
    $sql = "UPDATE usuario SET 
            nombre = '".$nombre."',
            apellido = '".$apellido."',
            correo = '".$correo."',
            fecha_nacimiento = '".$cumpleaños."',
            id_genero = '".$genero."',
            COD_documento = '".$documento."' 
            WHERE id_usuario = '".$id."'";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado === TRUE) {
        // Solo intenta actualizar la contraseña si la actualización anterior fue exitosa
        $sql2 = "UPDATE usuario SET contraseña = '".$contra."' WHERE id_usuario = '".$id."' AND contraseña = '".$verificar."'";
        $resultado2 = mysqli_query($conexion, $sql2);

        if ($resultado2 === TRUE && mysqli_affected_rows($conexion) > 0) {
            $_SESSION['guardar'] = "Datos actualizados correctamente.";
        } else {
            $_SESSION['falla'] = "Información incorrecta, el usuario o contraseña son incorrectos.";
        }
    } else {
        $_SESSION['falla'] = "Error al actualizar los datos.";
    }

    header("Location: ../lo-re-pe/perfil.php?correo='".$correo."'");
    exit;