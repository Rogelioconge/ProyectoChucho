<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar Pelicula</title>
</head>

<body>
    <h1>Pelicula Nueva</h1>

    <!-- agregar_pelicula.php -->

    <form action="<?php echo base_url('Cine/insertarPelicula'); ?>" method="post">
        <label for="nombre">Nombre de la película:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="imagen">URL de la imagen:</label>
        <input type="text" id="imagen" name="imagen" required><br>
        <label for="costo">Costo de la película:</label>
        <input type="number" id="costo" name="costo" required><br>
        <input type="submit" value="Agregar">
    </form>

</body>

</html>