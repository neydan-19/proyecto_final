<?php
    include_once("../Config/Conexion.php");

    $id = $_POST['Id'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $correo = $_POST['Email'];
    $cumpleaños = $_POST['Cumpleaños'];
    $genero = $_POST['Genero'];
    $documento = $_POST['Documento'];
    $verificar = $_POST['verificacion'];
    $contra = $_POST['Contraseña'];



    $sql = "UPDATE usuario SET 

            nombre = '".$nombre."',
            apellido = '".$apellido."',
            correo = '".$correo."',
            fecha_nacimiento = '".$cumpleaños."',
            id_genero = '".$genero."',
            COD_documento = '".$documento."' WHERE id_usuario = '".$id."'";

            $resultado = mysqli_query($conexion, $sql);

            if ($resultado === TRUE) {
                header("location:../lo-re-pe/perfil.php?correo='".$correo."'");
            } else {
                echo "DATOS NO GUARDADOS";
            }
    
        
    $sql2 = "UPDATE usuario SET 
        
            contraseña = '".$contra."' WHERE contraseña = '".$verificar."'";
        
            $resultado2 = mysqli_query($conexion, $sql2);
        
            if ($resultado2 === TRUE) {
                header("location:../lo-re-pe/perfil.php?correo='".$correo."'");
                session_start();
                $_SESSION['guardar'] = "Datos correctos, Bienvenido!!!";
            } else {
                header("location:../lo-re-pe/perfil.php?correo='".$correo."'");
                session_start();
                $_SESSION['falla'] = "Información incorrecta, el usuario o contraseña son incorrectos";
            }
?>