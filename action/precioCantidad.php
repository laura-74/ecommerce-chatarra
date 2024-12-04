<?php
session_start();

require_once($_SERVER['DOCUMENT_ROOT'] . '/database/conection.php');
$datosUsuario = $_SESSION['datosUsuario'] ?? [];


$sql = "EXEC precioCantidadCobre";
$stmt = $conexion->prepare($sql);
$stmt->execute();
$precioCantidadCobre = $stmt->fetch(PDO::FETCH_ASSOC);
$_SESSION['precioCantidadCobre'] = $precioCantidadCobre;


header('Location: /view/compra.php');
exit();
