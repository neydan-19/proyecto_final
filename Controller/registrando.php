<?php

            include_once("../Config/conexion.php");

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $contraseña = $_POST['clave'];

            $sql = "INSERT INTO usuario(nombre, apellido, correo, contraseña,id_genero, COD_documento) VALUES('$nombre','$apellido','$correo','$contraseña',0,0)";

            $resultado = mysqli_query($conexion, $sql);

            if ($resultado === TRUE) {
                header("location:../index.php");
                session_start();
                $_SESSION['msj'] = "Datos correctos, Bienvenido!!!";
        } else {
                header("location:../lo-re-pe/login.php");
                session_start();
                $_SESSION['msj'] = "Información incorrecta, el usuario o contraseña son incorrectos";
        }
?>