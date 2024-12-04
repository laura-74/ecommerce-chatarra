<?php
session_start();
$precioCantidadCobre = $_SESSION['precioCantidadCobre'] ?? [];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden Compra</title>
    <link rel="stylesheet" href="/css/ordenCompra.css">

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const precioPorKilo = <?= $precioCantidadCobre['precioPorKilo'] ?? 0; ?>; // Precio desde PHP
            const cantidadDisponible = <?= $precioCantidadCobre['cantidadEnKilo'] ?? 0; ?>; // Cantidad desde PHP
            const cantidadInput = document.querySelector('input[name="cantidadProducto"]');
            const totalDisplay = document.getElementById("totalCompra");
            const form = document.querySelector("form");
            const errorDisplay = document.getElementById("errorCantidad");

            // Actualiza el total dinámicamente
            cantidadInput.addEventListener("input", function () {
                const cantidad = parseFloat(cantidadInput.value) || 0;
                const total = precioPorKilo * cantidad;
                totalDisplay.textContent = total.toFixed(2); // Formato con 2 decimales

                // Limpia el mensaje de error si la cantidad es válida
                if (cantidad <= cantidadDisponible) {
                    errorDisplay.textContent = "";
                }
            });

            // Validar el formulario al enviarlo
            form.addEventListener("submit", function (event) {
                const cantidad = parseFloat(cantidadInput.value) || 0;

                // Evitar envío si la cantidad excede la disponible
                if (cantidad > cantidadDisponible) {
                    event.preventDefault();
                    errorDisplay.textContent = `La cantidad ingresada (${cantidad}) excede la cantidad disponible (${cantidadDisponible}).`;
                }
            });
        });
    </script>

</head>
<body>
<header class="header">
<a href="/view/viewComprador.php">Inicio</a>
        <h1 class="header__h1">BIENVENIDO A GRUPO B&C </h1>
    </header>
    <main class="main">
        <section class="main__section">
            <form action="/action/ordenCompra.php" method="POST">
                <div class="main__section__div">
                    <p>Cable de cobre</p>
                </div>
                <div class="main__section__div__img">
                    <img src="/assets/cablecobre.avif" alt="">
                </div>
                <div>
                    <p class="main__section__p">Precio: <?= $precioCantidadCobre['precioPorKilo'] ?? 'Valor no disponible'; ?></p>
                    <p class="main__section__p">Cantidad en kilos disponible: <?= $precioCantidadCobre['cantidadEnKilo'] ?? 'Valor no disponible'; ?></p>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="">Cantidad producto</label>
                    <input class="main__section__input" type="int" name="cantidadProducto">
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="">Método de pago</label>
                    <select class="main__section__input" name="metodoPago" id="">
                        <option value=""></option>
                        <option value="1">MASTERCARD</option>
                        <option value="2">PSE</option>
                        <option value="3">VISA</option>
                        <option value="4">PAYPAL</option>
                    </select>
                </div>
                <div>
                    <p class="main__section__p">El total de compra es: <br> $<span id="totalCompra">0.00</span></p>
                    <p id="errorCantidad" style="color: red; font-weight: bold;"></p>
                </div>
                <div class="main__section__button">
                <button class="button" type="submit">Hacer compra</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
