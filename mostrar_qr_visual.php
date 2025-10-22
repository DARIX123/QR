<?php
$id_usuario = $_GET['id'] ?? '';
$qr_file = "qr_$id_usuario.png";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Verificación QR</title>
  <link rel="stylesheet" href="estiloqr.css">
</head>
<body>
  <div class="card">
    <h1>Escanea tu código QR</h1>
    <p>Usa tu celular para verificar tu cuenta y continuar</p>
    <?php if(file_exists($qr_file)): ?>
      <img src="<?php echo $qr_file; ?>" alt="Código QR">
    <?php else: ?>
      <p>QR no disponible</p>
    <?php endif; ?>
  </div>
</body>
</html>
