<?php
include('phpqrcode/qrlib.php'); // Librería QR

$id_usuario = $_GET['id'] ?? ''; // obtener ID del usuario
if (!$id_usuario) {
    die("ID de usuario no proporcionado");
}

// URL del túnel Ngrok
$ngrok_url = "https://multilobular-guarded-michelle.ngrok-free.dev?id=$id_usuario";

// Guardar el QR como archivo
$filename = "qr_$id_usuario.png";
QRcode::png($ngrok_url, $filename);

// Redirigir al HTML visual para mostrarlo
header("Location: mostrar_qr_visual.php?id=$id_usuario");
exit();
?>
