<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="/css/viewComprador.css">
    <link rel="shortcut icon" href="/assets/icono.jpg" type="image/x-icon">


</head>

<body>
    <header class="header">
        <h1 class="header__h1">GRUPO B&C CHATARRA</h1>
    </header>
    <main class="main">
        <section class="main__section">
            <a href="/action/precioCantidad.php" class="main__section__a">
                <p class="main__section__a__div__p">COBRE</p>
                <div class="main__section__a__div">
                    <img class="main__section__a__div__img" src="/assets/cobre.jpg">
                </div>
            </a>
            <a href="/forms/formCreate.php" class="main__section__a">
                <p class="main__section__a__div__p">INDUSTRIAL</p>
                <div class="main__section__a__div">
                    <img class="main__section__a__div__img" src="/assets/industrial.jpg">
                </div>
            </a>
            <a href="/forms/formCreate.php" class="main__section__a">
                <p class="main__section__a__div__p">ELECTRÓNICA</p>
                <div class="main__section__a__div">
                    <img class="main__section__a__div__img" src="/assets/electronica.jpg">
                </div>
            </a>
            <a href="/forms/formCreate.php" class="main__section__a">
                <p class="main__section__a__div__p">ALUMINIO</p>
                <div class="main__section__a__div">
                    <img class="main__section__a__div__img" src="/assets/aluminio.jpg">
                </div>
            </a>
            <a href="/forms/formCreate.php" class="main__section__a">
                <p class="main__section__a__div__p">VIDRIO</p>
                <div class="main__section__a__div">
                    <img class="main__section__a__div__img" src="/assets/chatarraVidrio.jpg">
                </div>
            </a>
            <a href="/forms/formCreate.php" class="main__section__a">
                <p class="main__section__a__div__p">HIERRO</p>
                <div class="main__section__a__div">
                    <img class="main__section__a__div__img" src="/assets/chatarraHierro.jpg">
                </div>
            </a>
            <a href="/forms/formCreate.php" class="main__section__a">
                <p class="main__section__a__div__p">ELECTRODOMÉSTICOS</p>
                <div class="main__section__a__div">
                    <img class="main__section__a__div__img" src="/assets/chatarraElectrodomestico.jpg">
                </div>
            </a>
            <a href="/forms/formCreate.php" class="main__section__a">
                <p class="main__section__a__div__p">AUTOMOTRIZ</p>
                <div class="main__section__a__div">
                    <img class="main__section__a__div__img" src="/assets/chatarraAutomotriz.jpg">
                </div>
            </a>
        </section>
    </main>
    <footer class="footer">
        <div class="footer__nosotros">
            <h3>Nosotros</h3>
            <div>
                <p>Somos expertos en el manejo, traslado y recolección de chatarra, y todo tipo de residuos y desperdicios industriales ofreciendo soluciones totales a nuestros clientes mediante el uso de los mejores equipos de acuerdo a las necesidades.</p>
            </div>
        </div>
        <div class="footer__contacto">
            <h3>Contacto</h3>
            <div>
                <a href="/view/cambioRol.php">Adquirir un perfil de vendedor</a>
                <p>Telefono: 55 55 55 55 55</p>
                <p>Correo: grupob&c@unicv.com </p>
            </div>
            <div>

            </div>
        </div>
        <div class="footer__redes">
            <h3>Redes</h3>
            <div class="footer__redes__div">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                        <path fill="white" d="M12 2.04c-5.5 0-10 4.49-10 10.02c0 5 3.66 9.15 8.44 9.9v-7H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89c1.09 0 2.23.19 2.23.19v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33v7a10 10 0 0 0 8.44-9.9c0-5.53-4.5-10.02-10-10.02" />
                    </svg>
                    <p>Facebook</p>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                        <circle cx="17" cy="7" r="1.5" fill="white" fill-opacity="0">
                            <animate fill="freeze" attributeName="fill-opacity" begin="1.3s" dur="0.15s" values="0;1" />
                        </circle>
                        <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path stroke-dasharray="72" stroke-dashoffset="72" d="M16 3c2.76 0 5 2.24 5 5v8c0 2.76 -2.24 5 -5 5h-8c-2.76 0 -5 -2.24 -5 -5v-8c0 -2.76 2.24 -5 5 -5h4Z">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="72;0" />
                            </path>
                            <path stroke-dasharray="28" stroke-dashoffset="28" d="M12 8c2.21 0 4 1.79 4 4c0 2.21 -1.79 4 -4 4c-2.21 0 -4 -1.79 -4 -4c0 -2.21 1.79 -4 4 -4">
                                <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.6s" values="28;0" />
                            </path>
                        </g>
                    </svg>
                    <p>Instagram</p>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 14 14">
                        <g fill="none">
                            <g clip-path="url(#primeTwitter0)">
                                <path fill="white" d="M11.025.656h2.147L8.482 6.03L14 13.344H9.68L6.294 8.909l-3.87 4.435H.275l5.016-5.75L0 .657h4.43L7.486 4.71zm-.755 11.4h1.19L3.78 1.877H2.504z" />
                            </g>
                            <defs>
                                <clipPath id="primeTwitter0">
                                    <path fill="#fff" d="M0 0h14v14H0z" />
                                </clipPath>
                            </defs>
                        </g>
                    </svg>
                    <p>X</p>
                </div>
            </div>
        </div>
        <div class="footer__politicas">
            <h3>Politicas</h3>
            <div class="footer__politicas__div">
                <p>Politicas de privacidad</p>
                <p>Terminos y condiciones</p>
                <p>Politíca de privacidad</p>
                <p>Politíca de cookies</p>
                <p>Código de ética</p>
            </div>
        </div>
    </footer>
</body>

</html>