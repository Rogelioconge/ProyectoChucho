<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen de la compra</title>
</head>
<body>
    <h1>Aqui tienes tu resumen</h1>

    <?php if (isset($nombre) && isset($total)): ?>
    <h2>Resumen de la Compra:</h2>
    <p>Nombre: <?php echo $nombre; ?></p>
    <p>Total a pagar: $<?php echo $total; ?></p>
    <?php if (isset($cambio)): ?>
    <p>Pago recibido: $<?php echo $pago; ?></p>
    <p>Cambio: $<?php echo $cambio; ?></p>
    <?php endif; ?>
    <?php endif; ?>
</body>
</html>
