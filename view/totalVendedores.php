<?php
session_start();
$totalVendedores = $_SESSION['totalVendedores'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total vendedores</title>
    <link rel="stylesheet" href="/css/viewTotal.css">
    <link rel="shortcut icon" href="/assets/icono.jpg" type="image/x-icon">
</head>
<body>
<header class="header">
<a href="/view/administrador.php">Inicio</a>
        <h1 class="header__h1">BIENVENIDO A GRUPO B&C </h1>
    </header>
<main class="main">
    <section class="main__table">
      <div>
        <h2 class="main__section__h2">Tabla de vendedores </h2>
      </div>
      <table>
        <thead>
          <tr>
          <th> </th>
            <th>Nombre </th>
            <th>Apellido</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $contador = 1;
          foreach ($totalVendedores as $totalVendedor): ?>
            <tr>
            <td><?php echo $contador++; ?></td> <!-- Incrementa el contador en cada fila -->
              <td><?php echo htmlspecialchars($totalVendedor['nombreUsuario']); ?></td>
              <td><?php echo htmlspecialchars($totalVendedor['apellidoUsuario']); ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </section>
  </main> 
</body>
</html>