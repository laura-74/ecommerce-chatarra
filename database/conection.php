<?php

try {
    // Conectar al servidor SQL sin base de datos especificada
    $conexion = new PDO("sqlsrv:Server=localhost\SQLEXPRESS;", "", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $nombreBaseDatos = "proyectoChatarra";

    // Verificar si la base de datos existe
    $sqlVerificarDB = "SELECT COUNT(*) AS count FROM sys.databases WHERE name = :dbname";
    $stmt = $conexion->prepare($sqlVerificarDB);
    $stmt->bindParam(':dbname', $nombreBaseDatos);
    $stmt->execute();
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($resultado['count'] == 0) {
    echo 'base de datos no existente'        ;
    } else {
        $conexion = new PDO("sqlsrv:Server=localhost\SQLEXPRESS;Database=$nombreBaseDatos", "", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
} catch (PDOException $e) {
    echo "Error de conexión o creación de base de datos/tablas: " . $e->getMessage();
}
