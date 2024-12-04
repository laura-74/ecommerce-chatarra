<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="/css/registro.css">
    <link rel="shortcut icon" href="/assets/icono.jpg" type="image/x-icon">

</head>

<body>
<header class="header">
        <h1 class="header__h1">GRUPO B&C CHATARRA</h1>
    </header>
    <main class="main">
        <section class="main__section">
        <div class="main__section__div">
             <p class="main__section__p">Registrarse</p> 
            </div>
            <form action="/action/registro.php" method="POST" class="main__section__form">
                <div class="main__section__div">
                    <label class="main__section__label" for="">Nombre</label>
                    <input class="main__section__input" type="text" name="nombreUsuario" required>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="">Apellido</label>
                    <input class="main__section__input" type="text" name="apellidoUsuario" required>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="">Documento</label>
                    <input class="main__section__input" type="text" name="identificacionUsuario" required> 
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="">Teléfono</label>
                    <input class="main__section__input" type="text" name="telefono" required>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="">Elija un departamento</label>
                    <select class="main__section__input" name="departamento" id="" required>
                        <option value=""></option>
                        <option value="1">Amazonas</option>
                        <option value="2">Antioquia</option>
                        <option value="3">Arauca</option>
                        <option value="4">Atlántico</option>
                        <option value="5">Bolívar</option>
                        <option value="6">Boyacá</option>
                        <option value="7">Caldas</option>
                        <option value="8">Caquetá</option>
                        <option value="9">Casanare</option>
                        <option value="10">Cauca</option>
                        <option value="11">Cesar</option>
                        <option value="12">Chocó</option>
                        <option value="13">Córdoba</option>
                        <option value="14">Cundinamarca</option>
                        <option value="15">Guainía</option>
                        <option value="16 ">Guaviare</option>
                        <option value="17">Huila</option>
                        <option value="18">La Guajira</option>
                        <option value="19">Magdalena</option>
                        <option value="20">Meta</option>
                        <option value="21">Nariño</option>
                        <option value="22">Norte de Santander</option>
                        <option value="23">Putumayo</option>
                        <option value="24">Quindío</option>
                        <option value="25">Risaralda</option>
                        <option value="26">San Andrés y Providencia</option>
                        <option value="27">Santander</option>
                        <option value="28">Sucre</option>
                        <option value="29">Tolima</option>
                        <option value="30">Valle del Cauca</option>
                        <option value="31">Vaupés</option>
                        <option value="32">Vichada</option>
                    </select>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="">Elija un Rol</label>
                    <select class="main__section__input" name="rol" id="" required>
                        <option value=""></option>
                        <option value="1">Comprador</option>
                        <option value="2">Vendedor</option>
                    </select>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="">Correo Electrónico</label>
                    <input class="main__section__input" type="text" name="correoElectronico" required>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="text">Direccion</label>
                    <input class="main__section__input" type="text" name="direccion" required>
                </div>
                <div class="main__section__div">
                    <label class="main__section__label" for="text">Contraseña</label>
                    <input class="main__section__input" type="text" name="contrasena" required> 
                </div>
                <div class="main__section__div">
                    <button class="main__section__button" type="submit">Crear Cuenta</button>
                </div>
            </form>
        </section>
    </main>
    <footer class="footer"></footer>
</body>

</html>