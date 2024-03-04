<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/swiper2.css" />
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="icon" type="img/png" href="./img/nike_logo.webp" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Page Oficial</title>
</head>

<body>
<?php
    session_start();
    if (isset($_SESSION['msj'])) {
        $respuesta = $_SESSION['msj'];
        unset($_SESSION['msj']);

    ?>
        <script>
            Swal.fire({
                title: "Registro Exitoso!",
                text: "Bienvenido!",
                icon: "success"
            });
        </script>
    <?php
    }
    ?>
    <header>
        <a href="" class="contenedor-img"><img src="./img/nike_logo.webp" alt="logo"></a>
        <nav>
            <ul>
                <li id="lanzamientos" class="li">
                    <a href="">Lanzamientos</a>
                    <div class="lanzamientos">
                        <div>
                            <ul>
                                <li><a href=""><b>Destacados</b></a></li>
                                <li><a href="">Jordan</a></li>
                                <li><a href="">Nike</a></li>
                                <li><a href="">Adidas</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""><b>Novedades Hombres</b></a></li>
                                <li><a href="">Zapatillas Hombre</a></li>
                                <li><a href="">Ropa de Hombre</a></li>
                                <li><a href="">Accesorios y Equipo</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""><b>Novedades Mujeres</b></a></li>
                                <li><a href="">Zapatillas Mujeres</a></li>
                                <li><a href="">Ropa de Mujer</a></li>
                                <li><a href="">Accesorios y Equipo</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""><b>Novedades Niños</b></a></li>
                                <li><a href="">Zapatillas Niños</a></li>
                                <li><a href="">Ropa de Niños</a></li>
                                <li><a href="">Accesorios</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li id="hombre" class="li">
                    <a href="">Hombre</a>
                    <div class="hombre">
                        <div>
                            <ul>
                                <li><a href=""><b>Todo el Calzado</b></a></li>
                                <li><a href="">Urbano</a></li>
                                <li><a href="">Correr</a></li>
                                <li><a href="">Fútbol</a></li>
                                <li><a href="">Basquet</a></li>
                                <li><a href="">Skateboarding</a></li>
                                <li><a href="">Tenis</a></li>
                                <li><a href="">Entrenamiento y Gimnasio</a></li>
                                <li><a href="">Ciclismo</a></li>
                                <li><a href="">Sandalias</a></li>
                                <li><a href="">Jordan</a></li>
                                <li><a href="">Shoe Finder</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""><b>Toda la Ropa</b></a></li>
                                <li><a href="">Alianza Lima</a></li>
                                <li><a href="">Camisetas y polos</a></li>
                                <li><a href="">Poleras</a></li>
                                <li><a href="">Casacas y Chalecos</a></li>
                                <li><a href="">Pantalones</a></li>
                                <li><a href="">Leggings</a></li>
                                <li><a href="">Shorts</a></li>
                                <li><a href="">Conjuntos</a></li>
                                <li><a href="">Jordan</a></li>
                                <li><a href="">Polos con Cuello</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""><b>Todos los Accesorios</b></a></li>
                                <li><a href="">Maletines y Mochilas</a></li>
                                <li><a href="">Gorras, viseras y beanies</a></li>
                                <li><a href="">Medias</a></li>
                                <li><a href="">Jordan</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""><b>Compra por Colección</b></a></li>
                                <li><a href="">Fútbol</a></li>
                                <li><a href="">Correr</a></li>
                                <li><a href="">Alianza Lima</a></li>
                                <li><a href="">Entrenar</a></li>
                                <li><a href="">Jordan</a></li>
                                <li><a href="">Urbano</a></li>
                                <li><a href="">Yoga</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li id="mujer" class="li">
                    <a href="">Mujer</a>
                    <div class="mujer">
                        <div>
                            <ul>
                                <li><a href=""><b>Todo el Calzado</b></a></li>
                                <li><a href="">Urbano</a></li>
                                <li><a href="">Correr</a></li>
                                <li><a href="">Fútbol</a></li>
                                <li><a href="">Basquet</a></li>
                                <li><a href="">Skateboarding</a></li>
                                <li><a href="">Tenis</a></li>
                                <li><a href="">Entrenamiento y Gimnasio</a></li>
                                <li><a href="">Ciclismo</a></li>
                                <li><a href="">Sandalias</a></li>
                                <li><a href="">Jordan</a></li>
                                <li><a href="">Shoe Finder</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""><b>Toda la Ropa</b></a></li>
                                <li><a href="">Alianza Lima</a></li>
                                <li><a href="">Bra Finder</a></li>
                                <li><a href="">Camisetas y polos</a></li>
                                <li><a href="">Pantalones</a></li>
                                <li><a href="">Leggings</a></li>
                                <li><a href="">Bras</a></li>
                                <li><a href="">Poleras</a></li>
                                <li><a href="">Casacas y Chalecos</a></li>
                                <li><a href="">Faldas y vestidos</a></li>
                                <li><a href="">Shorts</a></li>
                                <li><a href="">Conjuntos</a></li>
                                <li><a href="">Jordan</a></li>
                                <li><a href="">Yoga</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""><b>Todos los Accesorios</b></a></li>
                                <li><a href="">Maletines y Mochilas</a></li>
                                <li><a href="">Gorras, viseras y beanies</a></li>
                                <li><a href="">Canilleras, guantes y pelotas</a></li>
                                <li><a href="">Medias</a></li>
                                <li><a href="">Jordan</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""><b>Compra por Colección</b></a></li>
                                <li><a href="">Fútbol</a></li>
                                <li><a href="">Correr</a></li>
                                <li><a href="">Alianza Lima</a></li>
                                <li><a href="">Entrenar</a></li>
                                <li><a href="">Jordan</a></li>
                                <li><a href="">Urbano</a></li>
                                <li><a href="">Yoga</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li id="niños" class="li">
                    <a href="">Niños</a>
                    <div class="niños">
                        <div>
                            <ul>
                                <li><a href=""><b>Todo el Calzado Niños</b></a></li>
                                <li><a href="">Urbano</a></li>
                                <li><a href="">Correr</a></li>
                                <li><a href="">Fútbol</a></li>
                                <li><a href="">Basquet</a></li>
                                <li><a href="">Entrenamiento y Gimnasio</a></li>
                                <li><a href="">Jordan</a></li>
                                <li><a href="">Sandalias</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""><b>Todo el Calzado Niñas</b></a></li>
                                <li><a href="">Urbano</a></li>
                                <li><a href="">Correr</a></li>
                                <li><a href="">Fútbol</a></li>
                                <li><a href="">Basquet</a></li>
                                <li><a href="">Jordan</a></li>
                                <li><a href="">Entrenamiento y Gimnasio</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""><b>Toda la Ropa Niños</b></a></li>
                                <li><a href="">Camisetas y polos</a></li>
                                <li><a href="">Pantalones</a></li>
                                <li><a href="">Poleras</a></li>
                                <li><a href="">Casacas y Chalecos</a></li>
                                <li><a href="">Shorts</a></li>
                                <li><a href="">Conjuntos</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""><b>Toda la Ropa Niñas</b></a></li>
                                <li><a href="">Bras</a></li>
                                <li><a href="">Camisetas y polos</a></li>
                                <li><a href="">Pantalones</a></li>
                                <li><a href="">Leggings</a></li>
                                <li><a href="">Poleras</a></li>
                                <li><a href="">Casacas y Chalecos</a></li>
                                <li><a href="">Shorts</a></li>
                                <li><a href="">Conjuntos</a></li>
                                <li><a href="">Faldas y vestidos</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li><a href=""><b>Todos los Accesorios</b></a></li>
                                <li><a href="">Maletines y Mochilas</a></li>
                                <li><a href="">Gorras, viseras y beanies</a></li>
                                <li><a href="">Canilleras, guantes y pelotas</a></li>
                                <li><a href="">Medias</a></li>
                                <br>
                                <br>
                                <li><a href=""><b>Compra por Colección</b></a></li>
                                <li><a href="">Fútbol</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="buscador">
            <button>
                <img src="./img/lupa.png" alt="icon">
            </button>
            <input type="text" placeholder="Buscar">
        </div>
        <div class="user">
            <a href="./lo-re-pe/login.php"><img src="./img/usuario.png" alt="Iniciar Sesion"></a>
        </div>
    </header>

    <main>
        <div class="noticias"></div>
        <section class="video-container">
            <img src="./img/JORDAN1.jpeg" alt="">
            <div class="jordan-title">
                <h5>Jordan</h5>
                <p><b>JORDAN 1<br> RETRO HIGH OG CHICAGO.</b></p>
                <div>
                    <a href="#">Comprar Jordan</a>
                    <a href="#">Comprar Jordan 1 OG CHICAGO</a>
                </div>
            </div>
        </section>

        <br>
        <br>
        <br>

        <section class="carrusel_container">
            <div class="carrusel_container-item">
                <div class="swiper-container mySwiper">
                    <h1>Siempre icónico</h1>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel1/c1_1.jpg" alt=""></a>
                            <h2>Jordan</h2>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel1/c1_2.jpg" alt=""></a>
                            <h2>Dunk</h2>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel1/c1_3.jpg" alt=""></a>
                            <h2>Pegasus</h2>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel1/c1_4.jpg" alt=""></a>
                            <h2>Air Max</h2>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel1/c1_5.jpg" alt=""></a>
                            <h2>Blazer</h2>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel1/c1_6.jpg" alt=""></a>
                            <h2>Air Force</h2>
                        </div>
                    </div>
                    <div class="swiper-button-next flecha1"></div>
                    <div class="swiper-button-prev flecha1"></div>
                </div>
            </div>

            <br>
            <br>
            <br>
            <hr>

            <div class="carrusel_container-item">
                <div class="swiper-container mySwiper">
                    <h1>Lo más nuevo</h1>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel2/c1.jpg" alt=""></a>
                            <div class="item-detalles">
                                <p class="nombre">Nike Dunk Low</p>
                                <p class="precio">S/539.90</p>
                                <p class="categoria">Zapatillas para mujer</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel2/c2.jpg" alt=""></a>
                            <div class="item-detalles">
                                <p class="nombre">Nike Air Max 90</p>
                                <p class="precio">S/ 649.90</p>
                                <p class="categoria">Zapatillas para hombre</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel2/c3.jpg" alt=""></a>
                            <div class="item-detalles">
                                <p class="nombre">Nike Air Force 1 '07 FlyEase</p>
                                <p class="precio">S/ 529.90</p>
                                <p class="categoria">Zapatillas Urbano Mujer</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel2/c4.jpg" alt=""></a>
                            <div class="item-detalles">
                                <p class="nombre">Air Jordan 1 Low SE</p>
                                <p class="precio">S/ 599.90</p>
                                <p class="categoria">Zapatillas para hombre</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel2/c5.jpg" alt=""></a>
                            <div class="item-detalles">
                                <p class="nombre">Nike Air Max 97 Futura</p>
                                <p class="precio">S/ 899.90</p>
                                <p class="categoria">Zapatillas para mujer</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel2/c6.jpg" alt=""></a>
                            <div class="item-detalles">
                                <p class="nombre">Nike Air Force 1 '07</p>
                                <p class="precio">S/ 559.90</p>
                                <p class="categoria">Zapatillas para hombre</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next flecha2"></div>
                    <div class="swiper-button-prev flecha2"></div>
                </div>
            </div>

            <br>
            <br>
            <br>
            <hr>

            <div class="carrusel_container-item">
                <div class="swiper-container mySwiper">
                    <h1>Deportes</h1>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel3/c1.jpg" alt=""></a>
                            <h2>Fútbol</h2>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel3/c2.jpg" alt=""></a>
                            <h2>Básquet</h2>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel3/c3.jpg" alt=""></a>
                            <h2>Correr</h2>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel3/c4.jpg" alt=""></a>
                            <h2>Entrenar</h2>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel3/c5.jpg" alt=""></a>
                            <h2>Yoga</h2>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel3/c6.jpg" alt=""></a>
                            <h2>Tenis</h2>
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="./img/carrusel3/c7.jpg" alt=""></a>
                            <h2>Skate</h2>
                        </div>
                    </div>
                    <div class="swiper-button-next flecha1"></div>
                    <div class="swiper-button-prev flecha1"></div>
                </div>
            </div>
        </section>

        <section class="membresia">
            <div class="membresia-container">
                <h1>Membresía Nike</h1>
                <img src="./img/menbresia.jpg" alt="img">
                <div class="texto-membresia">
                    <h1><b>HAZTE MIEMBRO</b></h1>
                    <br>
                    <p>Inscríbete gratis a los beneficios únicos. Sé parte de la comunidad.</p>
                    <br>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <div class="footer">
            <div class="acciones footer-section">
                <ul>
                    <li><a href="#"><b>BUSCAR TEMA</b></a></li>
                    <li><a href="#"><b>REGISTRATE PARA RECIBIR CORREOS</b></a></li>
                    <li><a href="#"><b>HAZE MIENBRO</b></a></li>
                </ul>
            </div>
            <div class="ayuda footer-section">
                <ul>
                    <li>
                        <p><b>OBTENER AYUDA</b></p>
                    </li>
                    <li><a href="#">Estado del pedido</a></li>
                    <li><a href="#">Envío del Pedido</a></li>
                    <li><a href="#">Cambios, devoluciones y garantías</a></li>
                    <li><a href="#">Opciones de pago</a></li>
                    <li><a href="#">Preguntas frecuentes</a></li>
                    <li><a href="#">Comunícate con nosotros</a></li>
                </ul>
            </div>
            <div class="acerca footer-section">
                <ul>
                    <li>
                        <p><b>ACERCA DE NIKE</b></p>
                    </li>
                    <li><a href="#">Empleo</a></li>
                </ul>
            </div>

            <div class="redes">
                <ul class="icons">
                    <li><a href="#"><img src="./img/twitter.png" alt=""></a></li>
                    <li><a href="#"><img src="./img/facebook.png" alt=""></a></li>
                    <li><a href="#"><img src="./img/youtube.png" alt=""></a></li>
                    <li><a href="#"><img src="./img/instagram.png" alt=""></a></li>
                </ul>
                <a href=""><img src="./img/libro-de-reclamaciones.webp" alt="" class="libro"></a>
            </div>
            <div class="ubicacion">
                <p><a href="#"><b>Perú</b></a> 2023 Equinox International SAC. Todos los derechos reservados.</p>
            </div>
            <div class="complementos">
                <ul>
                    <li><a href="#">Guías</a></li>
                    <li><a href="#">Términos y Condiciones</a></li>
                    <li><a href="#">Factura Electrónica</a></li>
                    <li><a href="#">Política de Privacidad</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="app.js"></script>
</body>

</html>