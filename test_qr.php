<?php
include(__DIR__ . '/phpqrcode/qrlib.php');

QRcode::png('https://ejemplo.com/test');
echo "QR generado correctamente";
