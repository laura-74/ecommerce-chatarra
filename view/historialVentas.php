<?php
session_start();
$obtenerHistorialCompra = $_SESSION['obtenerHistorialCompra'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de compra</title>
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
        <h2 class="main__section__h2">Historial de compras </h2>
      </div>
      <table>
        <thead>
          <tr>
          <th> </th>
            <th>Nombre </th>
            <th>Apellido</th>
            <th>identificacion Usuario</th>
            <th>Fecha orden</th>
            <th>Pago total</th>
            <th>tipo de pago</th>
            <th>Puntos Obtenidos</th>
            <th>Nombre del producto</th>
            <th>Tipo del producto</th>
            <th>Cantidad del producto</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          $contador = 1;
          foreach ($obtenerHistorialCompra as $obtenerHistorial): ?>
            <tr>
            <td><?php echo $contador++; ?></td> <!-- Incrementa el contador en cada fila -->
              <td><?php echo htmlspecialchars($obtenerHistorial['nombreUsuario']); ?></td>
              <td><?php echo htmlspecialchars($obtenerHistorial['apellidoUsuario']); ?></td>
              <td><?php echo htmlspecialchars($obtenerHistorial['identificacionUsuario']); ?></td>
              <td><?php echo htmlspecialchars($obtenerHistorial['fechaOrden']); ?></td>
              <td><?php echo htmlspecialchars($obtenerHistorial['totalAPagar']); ?></td>
              <td><?php echo htmlspecialchars($obtenerHistorial['tipoPago']); ?></td>
              <td><?php echo htmlspecialchars($obtenerHistorial['puntosObtenidos']); ?></td>
              <td><?php echo htmlspecialchars($obtenerHistorial['nombreProducto']); ?></td>
              <td><?php echo htmlspecialchars($obtenerHistorial['tipoProducto']); ?></td>
              <td><?php echo htmlspecialchars($obtenerHistorial['cantidad']); ?></td> 
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </section>
  </main> 
</body>
</html>