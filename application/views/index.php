<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Monlog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css?v=<?= rand() ?>">
</head>

<body>
    <div class="bg">
        <div class="content">
            <div class="container-loader d-none" id="loader-page">
                <div class="loader"></div>
            </div>
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand nav-ml" href="#">
                    <img loading="lazy" src="assets/img/logo.svg" class="nav-icono" alt="Monlog">
                </a>
            </nav>
            <section class="section__1">
                <div class="section__1-bg">
                    <div class="row section__1-bg-linear">
                        <div class="col-lg-6 col-md-6">
                            <h1 class="section__1-txTitle">12 años de experiencia en servicios de logística nacional e
                                internacional.</h1>
                            <div class="d-block d-sm-block d-md-none">
                                <a href="#" class="section__boton negro">Más información</a>
                                <div class="section__1-mas-info">
                                    <a href="#" class="mas-info"><img loading="lazy" src="assets/img/ver.svg" alt="Mas info"></a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-none d-sm-none d-md-block">
                            <div class="section__1-form-titulo">
                                <p class="section__1-form-titulo-txTitle">Solicita una cotización</p>
                            </div>
                            <form action="gracias" method="POST" id="formulario-hero">
                                <div class="row">
                                    <div class="col-12 section_1-form-row">
                                        <div class="section__1-form">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" name="nombre" id="nombre" required>
                                        </div>
                                        <div class="section__1-form-col2">
                                            <label for="nombre">Telefono</label>
                                            <input type="tel" name="telefono" id="telefono" required>
                                        </div>
                                    </div>
                                    <div class="col-12 section_1-form-row">
                                        <div class="section__1-form">
                                            <label for="nombre">Correo</label>
                                            <input type="text" name="correo" id="correo" required>
                                        </div>
                                        <div class="section__1-form-col2">
                                            <label for="nombre">Empresa</label>
                                            <input type="text" name="empresa" id="empresa" required>
                                        </div>
                                    </div>

                                    <div class="col-12 section__1-form-col12">
                                        <label for="nombre">Servicio</label>
                                        <input type="text" class="section__1-wA" name="servicio" id="servicio" required>
                                    </div>
                                    <div class="col-12 section__1-form-col12">
                                        <label for="nombre">Mensaje</label>
                                        <textarea class="section__1-wA input-txtarea" name="mensaje" id="mensaje"
                                            rows="10" cols="50"></textarea>
                                    </div>
                                    <div>
                                        <input type="hidden" name="utm_source" id="utm_source">
                                        <input type="hidden" name="utm_content" id="utm_content">
                                        <input type="hidden" name="utm_campaign" id="utm_campaign">
                                        <input type="hidden" name="utm_term" id="utm_term">
                                        <input type="hidden" name="utm_medium" id="utm_medium">
                                    </div>
                                    <div class="col-12 section__1-btn">
                                        <button type="submit" class="section__boton negro" id="enviar">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section__2">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section__2-txTitle section__2-txTitle-mb">Una experiencia de logística inigualable
                        </h2>
                        <p class="section__2-txSub">Conoce nuestros servicios</p>
                    </div>
                </div>
            </section>
            <section class="section__3">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 section__3-fondo-izquierda order-sm-1">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 seccion__3-padding order-sm-2">
                        <div class="seccion__title">
                            <p class="seccion__title-txt">Terrestre
                            </p>
                            <img loading="lazy" src="assets/img/terrestre.svg" class="seccion__title-terrestre" alt="logo terrestre">
                        </div>
                        <ul class="section__3-ul">
                            <li>Carga general: Caja seca, carga consolidada, carga completa, plataformas, porta
                                contenedor, Low boy y semi low boy, autotanque, tolvas, tipo almeja, C-TPAT.</li>
                            <li>Transporte blindado: Armado.</li>
                            <li>Transporte especializado: Carga pesada, materiales peligrosos, carga de productos
                                electrónicos de alto valor, transporte refrigerado.</li>
                            <li>Custodia de mercancía: En almacenes y en equipo de transporte.</li>
                            <li>Centro de monitoreo 24/7.</li>
                            <li>E-commerce.</li>
                        </ul>
                        <a href="#" class="section__boton negro">Cotiza ahora</a>
                    </div>
                </div>
            </section>
            <section class="section__4 d-none d-sm-none d-md-block">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row d-flex justify-content-center">
                            <div class="col col-md-4 section__4-card">
                                <div class="section__4-card-bg">
                                    <img loading="lazy" src="./assets/img/img3.jpg" class="card-img-top" alt="...">
                                    <div class="section__4-card-body">

                                        <p class="seccion__title-card">Aéreo
                                            <img loading="lazy" src="assets/img/aereo.svg" class="seccion__title-img" alt="logo aereo">
                                        </p>
                                        <div class="section__4-card-contenido">
                                            <ul class="section__4-ul section__4-ul-mb1">
                                                <li>Carga general: Servicio charter nacional e internacional,
                                                    consolidados, mercancía peligrosa, servicio a puerto, servicio
                                                    puerta a puerta, certificación IATA.
                                                </li>
                                                <li>Centro de monitoreo 24/7.</li>
                                                <li>E- commerce.</li>
                                            </ul>
                                            <div class="section4__boton-mg">
                                                <a href="#" class="section__boton negro">Más información</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-4 section__4-card">
                                <div class="section__4-card-bg">
                                    <img loading="lazy" src="./assets/img/img4.jpg" class="card-img-top" alt="...">
                                    <div class="section__4-card-body">
                                        <h5 class="seccion__title-card">Marítimo<img loading="lazy" src="assets/img/maritimo.svg"
                                                class="seccion__title-img" alt="logo aereo"></h5>
                                        <div class="section__4-card-contenido">

                                            <ul class="section__4-ul section__4-ul-mb2">
                                                <li>Carga general: Carga consolidada, carga completa 20’ y 40’,
                                                    contenedor refrigerado.</li>
                                                <li>Centro de monitoreo 24/7.</li>
                                            </ul>
                                            <div class="section4__boton-mg">
                                                <a href="#" class="section__boton negro">Conocer más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-4 section__4-card">
                                <div class="section__4-card-bg">
                                    <img loading="lazy" src="./assets/img/img5.jpg" class="card-img-top" alt="...">
                                    <div class="section__4-card-body">
                                        <p class="seccion__title-card">Intermodal<img loading="lazy" src="assets/img/intermodal.svg"
                                                class="seccion__title-img" alt="logo aereo"></p>
                                        <div class="section__4-card-contenido">
                                            <ul class="section__4-ul section__4-ul-mb3">
                                                <li>Transporte con modalidad mixta.</li>
                                                <li>Centro de monitoreo 24/7.</li>
                                            </ul>
                                            <div class="section4__boton-mg">
                                                <a href="#" class="section__boton negro">Más detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section__4 d-block d-sm-block d-md-none">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row d-flex justify-content-center">
                            <div class="col-12 section__4-card">
                                <div class="section__4-card-bg">
                                    <img loading="lazy" src="./assets/img/img3.jpg" class="card-img-top" alt="...">
                                    <div class="section__4-card-body">
                                        <p class="seccion__title-card">Aéreo<img loading="lazy" src="assets/img/aereo.svg"
                                                class="seccion__title-img" alt="logo aereo"></p>
                                        <div class="section__4-card-contenido">
                                            <ul class="section__4-ul section__4-ul-mb1">
                                                <li>Carga general: Servicio charter nacional e internacional,
                                                    consolidados, mercancía peligrosa, servicio a puerto, servicio
                                                    puerta a puerta, certificación IATA.
                                                </li>
                                                <li>Centro de monitoreo 24/7.</li>
                                                <li>E- commerce.</li>
                                            </ul>
                                            <div class="section4__boton-mg">
                                                <a href="#" class="section__boton negro">Más información</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 section__4-card">
                                <div class="section__4-card-bg">
                                    <img loading="lazy" src="./assets/img/img4.jpg" class="card-img-top" alt="...">
                                    <div class="section__4-card-body">
                                        <h5 class="seccion__title-card">Marítimo<img loading="lazy" src="assets/img/maritimo.svg"
                                                class="seccion__title-img" alt="logo aereo"></h5>
                                        <div class="section__4-card-contenido">

                                            <ul class="section__4-ul section__4-ul-mb2">
                                                <li>Carga general: Carga consolidada, carga completa 20’ y 40’,
                                                    contenedor refrigerado.</li>
                                                <li>Centro de monitoreo 24/7.</li>
                                            </ul>
                                            <div class="section4__boton-mg">
                                                <a href="#" class="section__boton negro">Conocer más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 section__4-card">
                                <div class="section__4-card-bg">
                                    <img loading="lazy" src="./assets/img/img5.jpg" class="card-img-top" alt="...">
                                    <div class="section__4-card-body">
                                        <p class="seccion__title-card">Intermodal<img loading="lazy" src="assets/img/intermodal.svg"
                                                class="seccion__title-img" alt="logo aereo"></p>
                                        <div class="section__4-card-contenido">
                                            <ul class="section__4-ul section__4-ul-mb3">
                                                <li>Transporte con modalidad mixta.</li>
                                                <li>Centro de monitoreo 24/7.</li>
                                            </ul>
                                            <div class="section4__boton-mg">
                                                <a href="#" class="section__boton negro">Más detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section__5">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 section__5-bg">
                        <div class="seccion__title">
                            <p class="seccion__title-txt">Almacenaje <img loading="lazy" src="assets/img/almacenaje.svg"
                                    class="seccion__title-img-2" alt="logo aereo"></p>
                        </div>
                        <ul class="section__5-ul">
                            <li class="blanco">Servicio de almacenaje con tiempo limitado.</li>
                            <li class="blanco">Manejo de inventarios.</li>
                            <li class="blanco">Manipulación de mercancía: consolidación, etiquetado, documentación de
                                embarque.</li>
                            <li class="blanco">Distribución de mercancías locales o nacionales a cliente final. </li>
                            <li class="blanco">Nuestras bodegas se ubican en diversas ciudades alrededor de la República
                                Mexicana y Estados Unidos: Tijuana, Hermosillo, Chihuahua, Mérida, Monterrey,
                                Guadalajara, Querétaro, Ciudad de México, Puebla y Laredo Texas.</li>
                        </ul>
                        <a href="#" class="section__boton negro">Cotiza ahora</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 section__5-fondo-derecha">
                    </div>
                </div>
            </section>
            <section class="section__6 d-none d-sm-none d-md-block">
                <div class="row section__6-bg">
                    <!-- <div class="offset-lg-8 offset-md-10 justify-content-lg-end justify-content-md-end">
                    </div> -->
                    <div class="col-lg-12 col-sm-12 section__6-alineacion">
                        <div class="section__6-card-body">
                            <div class="section__6-card">
                                <p class="seccion6__title-card">Comercializadora <img loading="lazy"
                                        src="assets/img/comercializadora.svg" class="seccion__title-img-2"
                                        alt="logo aereo"></p>
                                <ul class="seccion6__title-card-ul">
                                    <li class="seccion__title-card-ul-li">Importación de bienes a través de nuestra
                                        comercializadora.</li>
                                </ul>
                                <div class="section6__boton-mg">

                                    <a href="#" class="section__boton negro">Conocer más</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section__6 d-block d-sm-block d-md-none">
                <div class="row">
                    <!-- <div class="offset-lg-8 offset-md-10 justify-content-lg-end justify-content-md-end">
                    </div> -->
                    <div class="col-12 section__6-bg"></div>
                    <div class="col-12 section__6-alineacion section__6-card-movil">
                        <div>
                            <div>
                                <p class="seccion6__title-card">Comercializadora<img loading="lazy"
                                        src="assets/img/comercializadora.svg" class="seccion__title-img-2"
                                        alt="logo aereo"></p>
                                <ul class="seccion6__title-card-ul">
                                    <li class="seccion__title-card-ul-li">Importación de bienes a través de nuestra
                                        comercializadora.</li>
                                </ul>
                                <div class="section6__boton-mg">

                                    <a href="#" class="section__boton negro">Conocer más</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section__7">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 section__7-right">
                                <div class="card">
                                    <img loading="lazy" src="./assets/img/img8.jpg" class="card-img-top" alt="...">
                                    <div class="section__7-card-body">
                                        <p class="seccion__title-card section__7-mg-movil">Seguro de carga<img loading="lazy"
                                                src="assets/img/seguro.svg" class="seccion__title-img" alt="logo aereo">
                                        </p>
                                        <div class="section__7-dflexUl">
                                            <ul class="section__7-ul-movil">
                                                <li>Asegura tu mercancía.</li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 section__7-left">
                                <div class="card">
                                    <img loading="lazy" src="./assets/img/img9.jpg" class="card-img-top" alt="...">
                                    <div class="section__7-card-body">
                                        <p class="seccion__title-card">Agencia aduanal<img loading="lazy" src="assets/img/aduana.svg"
                                                class="seccion__title-img" alt="logo aereo"></p>
                                        <ul class="section__7-ul">
                                            <li>Clasificación de producto.</li>
                                            <li>Cálculo de impuestos y derechos.</li>
                                            <li>Despacho.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <section class="section__8">
                <div class="col-lg-12 text-center">
                    <h2 class="section__8-txTitle">Nuestro equipo de expertos diseñará la cadena logística que mejor
                        satisfaga las necesidades de tu negocio.
                    </h2>
                    <a href="#" class="section__boton negro">¿Listo para comenzar?</a>
                </div>
            </section>
            <section class="section__9">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 section__9-bg">
                        <p class="seccion__title-txt seccion9__title-txt-mb ">
                            Nos ubicamos en
                        </p>
                        <p class="section__9-txParrafo section__9-txParrafo-mb">José Clemente Orozco #335,<br> Valle
                            Oriente, 66269 <br>San Pedro Garza García, N.L.</p>
                        <a href="#" class="section__boton negro">Contáctanos</a>
                    </div>
                    <!-- <div class="col-lg-8 col-sm-12 iframe-bg"> -->
                    <iframe class="col-lg-8 col-md-8 col-sm-12 iframe-bg" height="320" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=Jos%C3%A9%20Clemente%20Orozco%20335,%20Valle%20Oriente,%2066269%20San%20Pedro%20Garza%20Garc%C3%ADa,%20N.L.+(Mi%20nombre%20de%20egocios)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <!-- </div> -->
                </div>
            </section>
            <section class="section__form-movil d-block d-sm-block d-md-none">
                <div class="section__1-form-titulo">
                    <p class="section__1-form-titulo-txTitle">Solicita una cotización</p>
                </div>
                <form action="gracias" method="POST" id="formulario-inferior">
                    <div class="row">
                        <div class="col-12 section__1-form-col12">

                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" required>
                        </div>
                        <div class="col-12 section__1-form-col12">
                            <label for="nombre">Telefono</label>
                            <input type="tel" name="telefono" id="telefono" required>
                        </div>
                        <div class="col-12 section__1-form-col12">
                            <label for="nombre">Correo</label>
                            <input type="text" name="correo" id="correo" required>
                        </div>
                        <div class="col-12 section__1-form-col12">
                            <label for="nombre">Empresa</label>
                            <input type="text" name="empresa" id="empresa" required>
                        </div>

                        <div class="col-12 section__1-form-col12">
                            <label for="nombre">Servicio</label>
                            <input type="text" class="section__1-wA" name="servicio" id="servicio" required>
                        </div>
                        <div class="col-12 section__1-form-col12">
                            <label for="nombre">Mensaje</label>
                            <textarea class="section__1-wA input-txtarea" name="mensaje" id="mensaje" rows="10"
                                cols="50"></textarea>
                        </div>
                        <div>
                            <input type="hidden" name="utm_source" id="utm_source-m">
                            <input type="hidden" name="utm_content" id="utm_content-m">
                            <input type="hidden" name="utm_campaign" id="utm_campaign-m">
                            <input type="hidden" name="utm_term" id="utm_term-m">
                            <input type="hidden" name="utm_medium" id="utm_medium-m">
                        </div>
                        <div class="col-12 section__1-btn">
                            <button type="submit" class="section__boton negro" id="enviar-m">Enviar</button>
                        </div>
                    </div>
                </form>
            </section>
            <section class="section__10">
                <div class="row">
                    <div class="col-lg-12 section__10-dflex">
                        <a href="#" class="section__10-aviso negro">Aviso de privacidad</p>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="assets/js/scrolltop.js?v=<?= rand() ?>"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
 https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-analytics.js"></script>

    <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.21.0/firebase-database.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>

    <script src="assets/js/frm.js?v=4"></script>
</body>

</html>