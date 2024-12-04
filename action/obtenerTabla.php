<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/database/conection.php');



$sql = "SELECT p.nombreProducto AS nombreProducto, p.tipoProducto AS tipoProducto, p.cantidadEnKilo AS cantidadEnKilo 
	FROM producto p
	JOIN vendedor_producto vp ON p.idProducto = vp.idProducto
	WHERE vp.idVendedor = 3;";
$stmt = $conexion->prepare($sql);
$stmt->execute();
$tablaVendedor = $stmt->fetchAll(PDO::FETCH_ASSOC);
$_SESSION['tablaVendedor'] = $tablaVendedor;
header('Location: /view/historialVentas.php');
exit();   

?>
