<?php
session_start();
$precioCantidadCobre = $_SESSION['precioCantidadCobre'] ?? [];
$datosUsuario = $_SESSION['datosUsuario'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="/css/compra.css">
    <link rel="shortcut icon" href="/assets/icono.jpg" type="image/x-icon">
</head>

<body>
    <header class="header">
        <a href="/view/viewComprador.php    ">Inicio</a>
        <h1 class="header__h1">BIENVENIDO A GRUPO B&C </h1>
    </header>
    <main class="main">
        <section class="main__section">
            <a href="/view/ordenCompra.php">
            <div class="main__section__div">
                <h3>Cable de cobre </h3>
                <img src="/assets/cablecobre.avif" alt="">
                <p>Precio: <?= $precioCantidadCobre['precioPorKilo'] ?? 'Valor no disponible'; ?></p>
                <p>Cantidad en kilos: <?= $precioCantidadCobre['cantidadEnKilo'] ?? 'Valor no disponible'; ?> </p>
            </div>
            </a>
            <div class="main__section__div">
                <h3>Elementos de cobre </h3>
                <img src="/assets/elementosCobre.jpg" alt="">
                <p>Precio: 32000 </p>
                <p>Cantidad en kilos: 4</p>
            </div>
            <div class="main__section__div">
                <h3>Utencilios de cobre </h3>
                <img src="/assets/herramientasCobre.jpg" alt="">
                <p>Precio: 33000 </p>
                <p>Cantidad en kilos: 2</p>
            </div>
            <div class="main__section__div">
                <h3>Cables de cobre </h3>
                <img src="/assets/cablesCobre.jpeg" alt="">
                <p>Precio:12000 </p>
                <p>Cantidad en kilos: 2</p>
            </div>
            <div class="main__section__div">
                <h3>Laminas de cobre </h3>
                <img src="/assets/laminasCobre.jpg" alt="">
                <p>Precio: 44000</p>
                <p>Cantidad en kilos: 6 </p>
            </div>
            <div class="main__section__div">
                <h3>Tubos de cobre </h3>
                <img src="/assets/tuboCobre.jpg" alt="">
                <p>Precio: 26000</p>
                <p>Cantidad en kilos: 3 </p>
            </div>
        </section>
    </main>
</body>

</html>