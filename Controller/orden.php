<?php

            include_once("../Config/conexion.php");

            $modelo = $_POST['modelo'];
            $precio = $_POST['precio'];
            $talla = $_POST['talla'];

            $sql = "INSERT INTO orden(Nombre_producto, Talla_producto, Precio_producto) VALUES('$modelo','$talla','$precio')";

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