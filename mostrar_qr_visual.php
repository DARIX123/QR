<?php
$archivo = $_GET['archivo'] ?? '';
$id = $_GET['id'] ?? '';

$qrcodeDir = __DIR__ . DIRECTORY_SEPARATOR . 'qrcodes' . DIRECTORY_SEPARATOR;
$qrcodePath = $qrcodeDir . basename($archivo);

// Debug opcional (te dice en pantalla la ruta que está buscando)
// echo "<pre>Buscando: $qrcodePath</pre>";
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

  <p class="subtitulo">
    Acerque su dispositivo y desbloquee una animación exclusiva que transforma este momento en algo visualmente increíble.
  </p>

  <h4 class="instruccion">Escanea el código QR</h4>

  <?php if ($archivo && file_exists($qrcodePath)): ?>
    <div class="qr-contenedor">
      <img src="qrcodes/<?php echo htmlspecialchars(basename($archivo)); ?>" alt="Código QR">
    </div>
  <?php else: ?>
    <p style="color:red;">⚠️ Error: no se generó el QR.</p>
    <p><small>Ruta buscada: <?php echo htmlspecialchars($qrcodePath); ?></small></p>
  <?php endif; ?>

  <script>
  const urlParams = new URLSearchParams(window.location.search);
  const userId = urlParams.get("id");

  const socket = new WebSocket("wss://multilobular-guarded-michelle.ngrok-free.dev");

  socket.onopen = () => {
    console.log("🛰️ Laptop conectada al WebSocket");
  };

  socket.onmessage = (event) => {
    console.log("📩 Laptop recibió:", event.data);
    if (event.data === "verificado:" + userId) {
      console.log("✅ Usuario verificado, mostrando animación...");
      window.location.href = "animacion.html?id=" + userId;
    }
  };
</script>

</body>
</html>

