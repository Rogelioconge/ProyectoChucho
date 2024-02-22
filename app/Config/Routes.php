<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Ruta para mostrar la cartelera de cine
$routes->get('/', 'Cine::cartelera');

// Ruta para mostrar el formulario de compra de entradas
$routes->get('Cine/resumen', 'Cine::resumen');

// Ruta para procesar el formulario y calcular el precio
$routes->post('Cine/calcularPrecio', 'Cine::calcularPrecio');


$routes->get('/', 'Home::index');
