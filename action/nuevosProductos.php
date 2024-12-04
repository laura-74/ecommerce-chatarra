<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/database/conection.php');
$idVendedor = $_SESSION['idUsuario'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombreProducto = $_POST['nombreProducto'];
    $tipoProducto = $_POST['tipoProducto'];
    $cantidadKilos = $_POST['cantidadKilos'];
    $descripcionProducto = $_POST['descripcionProducto'];
    $precio = $_POST['precio'];

    $sql = "EXEC agregarProducto :idVendedor, :nombreProducto,:tipoProducto, :cantidadKilos, :descripcionProducto, :precio";
    $stmt = $conexion->prepare($sql);

    $stmt->bindParam(':idVendedor', $idVendedor);
    $stmt->bindParam(':nombreProducto', $nombreProducto);
    $stmt->bindParam(':tipoProducto', $tipoProducto);
    $stmt->bindParam(':cantidadKilos', $cantidadKilos);
    $stmt->bindParam(':descripcionProducto', $descripcionProducto);
    $stmt->bindParam(':precio', $precio);

    $stmt->execute();

    header('Location: /view/registroExitosoProducto.php');
}
