<?php
$archivo = $_GET['archivo'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>QR Visual</title>
</head>
<body>
  <h1>Escanea en tu celular para verificar tu cuenta</h1>
  <?php if($archivo): ?>
      <img src="<?php echo htmlspecialchars($archivo); ?>" alt="Código QR">
  <?php else: ?>
      <p>Error al cargar el QR</p>
  <?php endif; ?>
</body>
</html>
