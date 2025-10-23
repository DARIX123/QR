<?php
$archivo = $_GET['archivo'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="estiloqr.css">
  <title>QR Visual</title>
</head>
<body>
  <div class="texto-arriba-container">
    <div class="logo-arriba">
      <img src="logo.png" alt="Logo">
    </div>
    <p class="texto-arriba">Cuatro personas, una comunidad, infinitas posibilidades</p>
  </div>

  <h2 class="titulo">TRAYECTORIA DE APRENDIZAJE</h2>

  <p class="subtitulo">Acerque su dispositivo y desbloquee una animación exclusiva que transforma este momento en algo visualmente increíble.</p>

  <h4 class="instruccion">Escanea el código QR</h4>

  <?php if($archivo): ?>
      <div class="qr-contenedor">
        <img src="<?php echo htmlspecialchars($archivo); ?>" alt="Código QR" class="qr">
      </div>
  <?php else: ?>
      <p>Error al cargar el QR</p>
  <?php endif; ?>
</body>
</html>

