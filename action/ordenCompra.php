<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/database/conection.php');
$precioCantidadCobre = $_SESSION['precioCantidadCobre'] ?? [];
$idUsuario = $_SESSION['idUsuario'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cantidadProducto = $_POST['cantidadProducto'];
    $metodoPago = $_POST['metodoPago'];
    $idProducto = $precioCantidadCobre['idProducto'];

    
    $sql = "EXEC compra :idUsuario, :cantidadProducto, :idProducto, :metodoPago";
    $stmt = $conexion->prepare($sql);

    $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
    $stmt->bindParam(':cantidadProducto', $cantidadProducto, PDO::PARAM_INT);
    $stmt->bindParam(':idProducto', $idProducto, PDO::PARAM_INT);
    $stmt->bindParam(':metodoPago', $metodoPago, PDO::PARAM_INT);

    $stmt->execute();

    $query = "SELECT TOP 1 Mensaje FROM MensajesTrigger ORDER BY Fecha DESC";
    $result = $conexion->query($query);
    $mensaje = $result->fetch(PDO::FETCH_ASSOC);

    $_SESSION['mensaje'] = $mensaje;
    $_SESSION['totalCompradores'] = $totalCompradores;

    
    header('Location: /view/compraExitosa.php');
    exit();  
}

?>

