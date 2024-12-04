<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewAdministrador</title>
    <link rel="stylesheet" href="/css/administrador.css">
    <link rel="shortcut icon" href="/assets/icono.jpg" type="image/x-icon">
</head>

<body>
    <header class="header">
        <h1 class="header__h1">BIENVENIDO A GRUPO B&C </h1>
    </header>
    <main class="main">
        <section class="main__section">
            <form action="/action/opcionesAdministrador.php" method="post">
            <div class="main__section__div">
                <label class="main__section__label" for=""> Opciones de<br> administrador</label>
                <select class="main__section__input" name="opcionesAdminstrador" id="">
                    <option value=""></option>
                    <option value="historialVentas">Historial ventas</option>
                    <option value="totalCompradores">Total de compradores</option>
                    <option value="totalVendedores">Total de vendedores</option>
                </select>   
            </div>
            <button class="button" type="submit">Consultar</button>
            </form>
        </section>

    </main>
    <footer class="footer">
    </footer>
</body>
</html>