<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/assets/icono.jpg" type="image/x-icon">

</head>

<body>
    <header class="header">
        <h1 class="header__h1">GRUPO B&C CHATARRA</h1>
    </header>
    <main class="main">
        <section class="main__section">
            <form action="/action/verificarPassword.php" method="POST">
                <div class="main__section__div">
                    <p class="main__section__p">Iniciar Sesión</p>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="">Correo electronico</label>
                    <input class="main__section__input" type="text" name="correo" required>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="Contraseña">Contraseña</label>
                    <input class="main__section__input" type="password" name="contrasena" required>
                </div>
                <div>
                    <!-- Mostrar el mensaje de error solo después del envío -->
                    <?php if (isset($_SESSION['error'])) : ?>
                        <div id="mensaje-error" style="color: red;">
                            <?php
                            echo htmlspecialchars($_SESSION['error']);
                            unset($_SESSION['error']); // Eliminar el error después de mostrarlo
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="main__section__div">
                    <p>No estás registrado? <a href="/view/registro.php">Regístrate</a> </p>
                </div>
                <div class="main__section__div">
                    <button class="main__section__button" type="submit">Ingresar</button>
                </div>
            </form>
        </section>
    </main>
    <footer class="footer">

    </footer>
</body>

</html>

<script>
    // Selecciona el elemento de error
    const mensajeError = document.getElementById('mensaje-error');

    // Verifica si el mensaje existe y establece un temporizador para ocultarlo
    if (mensajeError) {
        setTimeout(() => {
            mensajeError.style.display = 'none'; // Oculta el mensaje después de 5 segundos
        }, 10000); // Tiempo en milisegundos (5000 ms = 5 segundos)
    }
</script>