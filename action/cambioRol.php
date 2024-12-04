<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/database/conection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$cambioRol = $_POST['cambioRol'];
$identificacionUsuario = $_POST['identificacionUsuario'];

    $sql = "EXEC nuevoRol :nombreRol, :identificacionUsuario";
    $stmt = $conexion->prepare($sql);

    $stmt->bindParam(':nombreRol', $cambioRol);
    $stmt->bindParam(':identificacionUsuario', $identificacionUsuario);

    $stmt->execute();

}
    
header('Location: /view/cambioRolExitoso.php');
exit();