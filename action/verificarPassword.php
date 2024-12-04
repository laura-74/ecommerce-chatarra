<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/database/conection.php');
$error = "";

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        // Consulta para obtener el usuario
        $sql = "SELECT idUsuario, contraseña FROM usuario WHERE correoElectronico = :correo";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        $datosUsuario = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($datosUsuario && $contrasena === $datosUsuario['contraseña']) {
            $idUsuario = $datosUsuario['idUsuario'];

            $_SESSION['idUsuario'] = $idUsuario;

            // Consulta para obtener el rol del usuario
            $sql = "SELECT idRol FROM usuario_rol WHERE idUsuario = :idUsuario";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':idUsuario', $idUsuario);
            $stmt->execute();
            $datosRol = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($datosRol) {
                $idRol = $datosRol['idRol'];

                if ($idRol === '1') {

                    header('Location: /view/viewComprador.php');
                    exit();
                } else if ($idRol === '2') {
                    header('Location: /view/viewVendedor.php');
                    exit();
                } else {
                    header('Location: /view/administrador.php');
                    exit();
                }
            } else {
                $_SESSION['error'] = 'No se encontró un rol para el usuario.';
                header("Location: /index.php");
                exit();
            }
        } else {
            $_SESSION['error'] = 'Error en la contraseña o correo';
            header("Location: /index.php");
            exit();
        }
    } else {
        $_SESSION['error'] = 'Error en la contraseña o correo';
        header("Location: /index.php");
        exit();
    }
} catch (PDOException $e) {
    $_SESSION['error'] = "Error de conexión o consulta: " . $e->getMessage();
    header("Location: /index.php");
    exit();
}
