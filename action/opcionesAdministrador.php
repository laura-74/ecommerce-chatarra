<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/database/conection.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $opcionesAdminstrador = $_POST['opcionesAdminstrador'];
    switch ($opcionesAdminstrador) {
        case 'historialVentas':
            $sql = "EXEC obtenerHistorialCompra";
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            $obtenerHistorialCompra = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['obtenerHistorialCompra'] = $obtenerHistorialCompra;
            header('Location: /view/historialVentas.php');
            exit();            
            break;
        case 'totalCompradores':
            $sql = "EXEC totalCompradores";
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            $totalCompradores = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['totalCompradores'] = $totalCompradores;
            header('Location: /view/totalCompradores.php');
            exit();    
            break;
        case 'totalVendedores':
            $sql = "EXEC totalVendedores";
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            $totalVendedores = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $_SESSION['totalVendedores'] = $totalVendedores;
            header('Location: /view/totalVendedores.php');
            exit();    
            break;

        default:
            echo 'Opción inválida';

        break;
    }
}
