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

  <p class="subtitulo">
    Acerque su dispositivo y desbloquee una animación exclusiva que transforma este momento en algo visualmente increíble.
  </p>

  <h4 class="instruccion">Escanea el código QR</h4>

  <?php if($archivo): ?>
    <!-- SOBRE CON ANIMACIÓN -->
    <div class="sobre">
      <div class="tapa"></div>
      <div class="cuerpo">
        <img src="<?php echo htmlspecialchars($archivo); ?>" alt="Código QR" class="qr">
      </div>
    </div>
    
  <?php else: ?>
    <p>Error al cargar el QR</p>
  <?php endif; ?>
     
  <!-- IMAGEN SIMULADA LADO IZQUIERDO -->
<div class="imagen-lado izquierda">
  <img src="fondooo-removebg-preview.png" alt="Imagen Lado Izquierdo">
</div>

<!-- IMAGEN SIMULADA LADO DERECHO -->
<div class="imagen-lado derecha">
  <img src="fondooo-removebg-preview.png" alt="Imagen Lado Derecho">
</div>

</body>
</html>


