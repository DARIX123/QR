# QR
pequeño ejemplo de verificacion con qr


3️⃣ Flujo de WebSocket en el proyecto

Usuario se registra → PHP inserta datos en MySQL y genera QR.

Página de "pantalla de verificación" (la que tienes en PC) se conecta al servidor Node vía WebSocket y se subscribe al id del usuario.

Usuario escanea el QR → abre verificar.php en su teléfono.

verificar.php:

Marca verified = 1 en la base de datos.

Hace una petición HTTP al servidor Node diciendo: "usuario X verificado".

Servidor Node emite evento verified a todos los clientes que están escuchando ese usuario → la pantalla en PC se actualiza al instante.

Opcional: en el teléfono también puede recibir eventos en tiempo real (si quieres animaciones sincronizadas).