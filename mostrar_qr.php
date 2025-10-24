<?php
// mostrar_qr.php

// Incluir la librería PHP QR Code
include('phpqrcode/qrlib.php');

// Supongamos que obtienes el usuario recién registrado desde la base de datos
// Ejemplo:
$userId = $_GET['id'] ?? 1; // para pruebas, usa GET id, en producción toma de registro.php

// Generar la URL que irá dentro del QR
// Esta URL debe apuntar a tu página de verificación con el userId
$qrUrl = "https://multilobular-guarded-michelle.ngrok-free.dev?id=" . $userId;

// Carpeta donde guardar el QR
$dir = 'qrcodes/';
if (!file_exists($dir)) {
    mkdir($dir, 0777, true);
}

// Nombre del archivo QR
$filename = $dir . 'qr_user_' . $userId . '.png';

// Generar el QR
QRcode::png($qrUrl, $filename, QR_ECLEVEL_L, 4);

// Redirigir al HTML visual que mostrará el QR
// Pasamos el nombre del archivo para que mostrar_qrvisual.php lo cargue
header("Location: mostrar_qr_visual.php?archivo=" . urlencode($filename));
exit;
