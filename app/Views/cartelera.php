<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>CINE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/catalogoestilos.css">

</head>

<body>
    <!-- Es aqui en donde se tendra el div del titulo -->
    <div class="principal">
        <h1>Las mejores peliculas</h1>
        <a href="<?php echo base_url('Cine/agregarPelicula'); ?>" class="btn btn-primary">Agregar película</a>

    </div>

    <!-- Es aqui en donde se tendra el div de la cartelera -->
    <div class="secundaria">
        <div class="cartelera">
            <img src="<?php echo base_url('resources/Psinaire.jpeg'); ?>" id="1" alt="Sin Aire" class="imagenes"
                data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?php echo base_url('resources/Pasesinos.jpg'); ?>" id="2" alt="Asesinos" class="imagenes"
                data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?php echo base_url('resources/Pkiller.jpeg'); ?>" id="3" alt="Killer" class="imagenes"
                data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?php echo base_url('resources/Psaltburn.jpeg'); ?>" id="4" alt="Saltburn" class="imagenes"
                data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?php echo base_url('resources/Padentro.jpeg'); ?>" id="5" alt="Adentro" class="imagenes"
                data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?php echo base_url('resources/Poppenhaimer.jpg'); ?>" id="6" alt="Openhaimer" class="imagenes"
                data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?php echo base_url('resources/Pdejar.jpg'); ?>" id="7" alt="Dejar" class="imagenes"
                data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?php echo base_url('resources/Psaw.jpg'); ?>" id="8" alt="Saw" class="imagenes"
                data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?php echo base_url('resources/Pnieve.jpg'); ?>" id="9" alt="La sociedad de la nieve"
                class="imagenes" data-bs-toggle="modal" data-bs-target="#exampleModal">

        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Comprar boletos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="purchaseForm" action="<?php echo base_url('Cine/insertarVenta'); ?>" method="post">
                        <input type="hidden" id="peliculaId" name="peliculaId" value="peliculaId">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required><br>
                        <label for="entradas">Entradas:</label>
                        <input type="number" id="entradas" name="entradas" min="1" required><br>
                        <label for="pago">Pago:</label>
                        <input type="number" id="pago" name="pago" required><br>
                        <input type="hidden" id="activo" name="activo" value="1">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" id="submitPurchase">Comprar</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>




</body>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function () {
        $('.imagenes').click(function () {
            var peliculaId = $(this).attr('id');
            $('#peliculaId').val(peliculaId);
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>