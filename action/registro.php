<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/database/conection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombreUsuario = $_POST['nombreUsuario'];
    $apellidoUsuario = $_POST['apellidoUsuario'];
    $identificacionUsuario = $_POST['identificacionUsuario'];
    $telefono = $_POST['telefono'];
    $departamento = $_POST['departamento'];
    $rol = $_POST['rol'];
    $correoElectronico = $_POST['correoElectronico'];
    $direccion = $_POST['direccion'];
    $contrasena = $_POST['contrasena'];


    // Definición de la consulta usando parámetros
    $sql = "EXEC nuevoUsuario :nombreUsuario, :apellidoUsuario, :identificacionUsuario, :telefono, :departamento, :rol, :correoElectronico, :direccion, :contrasena";
    $stmt = $conexion->prepare($sql);

    // Bind de parámetros usando $stmt
    $stmt->bindParam(':nombreUsuario', $nombreUsuario);
    $stmt->bindParam(':apellidoUsuario', $apellidoUsuario);
    $stmt->bindParam(':identificacionUsuario', $identificacionUsuario);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':departamento', $departamento);
    $stmt->bindParam(':rol', $rol);
    $stmt->bindParam(':correoElectronico', $correoElectronico);
    $stmt->bindParam(':direccion', $direccion);
    $stmt->bindParam(':contrasena', $contrasena);

    // Ejecución de la consulta
    $stmt->execute();

    if ($rol === '1') {

        header('Location: /view/viewComprador.php');
        exit();
    } else if ($rol === '2') {

        header('Location: /view/viewVendedor.php');
        exit();
    } else {
        header('Location: /view/viewAdministrador.php');
        exit();
    }
}
