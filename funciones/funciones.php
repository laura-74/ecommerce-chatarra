<?php

$sql = "EXEC precioCantidadCobre";

$stmt = $conexion->prepare($sql);
$stmt->execute();
$precioCantidadCobre = $stmt->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT idUsuario, contraseña FROM usuario WHERE correoElectronico = :correo";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':correo', $correo);
$stmt->execute();
$datosUsuario = $stmt->fetch(PDO::FETCH_ASSOC);




function obtenerIdProducto()
{
    global $precioCantidadCobre;
    $idProducto = $precioCantidadCobre['idProducto'];
    return $idProducto;
}


function obtenerIdUsuario()
{
    global $datosUsuario;
    $idUsuario = $datosUsuario['idUsuario'];
    return $idUsuario;
}
