<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de rol</title>
    <link rel="stylesheet" href="/css/cambioRol.css">
    <link rel="shortcut icon" href="/assets/icono.jpg" type="image/x-icon">
</head>

<body>
<header class="header">
<a href="/view/viewComprador.php">Inicio</a>
        <h1 class="header__h1">BIENVENIDO A GRUPO B&C </h1>
    </header>
    <main class="main">
            <form action="/action/cambioRol.php" method="POST" class="main__form">
                <div class="main__section__div">
                    <label class="main__section__label" for="">Elija un Rol</label>
                    <select class="main__section__input" name="cambioRol" id="">
                        <option value=""></option>
                        <option value="1">Comprador</option>
                        <option value="2">Vendedor</option>
                    </select>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="">Documento de identificación</label>
                    <input class="main__section__input" type="text" name="identificacionUsuario">
                </div>
                <button type="submit">Enviar</button>

            </form>
    </main>
</body>
</html>