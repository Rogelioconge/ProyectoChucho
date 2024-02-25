<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar Película</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            outline: none;
            border-color: #007bff;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .fa-film {
            font-size: 24px;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1><i class="fas fa-film"></i>Agregar Película</h1>
        <form action="<?php echo base_url('Cine/insertarPelicula'); ?>" method="post">
            <label for="nombre">Nombre de la película:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="imagen">URL de la imagen:</label>
            <input type="text" id="imagen" name="imagen" required>
            <label for="costo">Costo de la película:</label>
            <input type="number" id="costo" name="costo" required>
            <input type="submit" value="Agregar">
        </form>
    </div>
</body>

</html>
