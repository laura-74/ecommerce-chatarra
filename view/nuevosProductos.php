<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro nuevos productos</title>
    <link rel="stylesheet" href="/css/nuevosProductos.css">
    <link rel="shortcut icon" href="/assets/icono.jpg" type="image/x-icon">

</head>

<body>
<header class="header">
<a href="/view/viewVendedor.php">Inicio</a>
        <h1 class="header__h1">GRUPO B&C CHATARRA</h1>
    </header>
    <main class="main">
        <section class="main__section">
        <div class="main__section__div">
             <p class="main__section__p">Registro de productos</p> 
            </div>
            <form action="/action/nuevosProductos.php" method="POST" class="main__section__form">
                <div class="main__section__div">
                    <label class="main__section__label" for="">Nombre del producto</label>
                    <input class="main__section__input" type="text" name="nombreProducto" required>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="">Tipo de producto</label>
                    <select class="main__section__input" name="tipoProducto" id="">
                        <option value=""></option>
                        <option value="Cobre">Cobre</option>
                        <option value="Industrial">Industrial</option>
                        <option value="Electrónica">Electrónica</option>
                        <option value="Aluminio">Aluminio</option>
                        <option value="vidrio">vidrio</option>
                        <option value="Hierro">Hierro</option>
                        <option value="Eletrodomésticos">Eletrodomésticos</option>
                        <option value="Automotriz">Automotriz</option>
                    </select>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="">Cantidad en kilos</label>
                    <input class="main__section__input" type="text" name="cantidadKilos" required>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="">Descripción del producto</label>
                    <input class="main__section__input" type="text" name="descripcionProducto" required>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="">Precio por Kilo</label>
                    <input class="main__section__input" type="int" name="precio" required>
                </div>
                <div class="main__section__div">
                    <button class="main__section__button" type="submit">Agregar nuevo producto</button>
                </div>
            </form>
        </section>
    </main>
    <footer class="footer"></footer>
</body>
</html>