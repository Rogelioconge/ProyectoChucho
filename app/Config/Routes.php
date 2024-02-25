<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Ruta para mostrar la cartelera de cine
$routes->get('/', 'Cine::cartelera');

// Ruta para mostrar el formulario de compra de entradas
$routes->post('Cine/insertarVenta', 'Cine::insertarVenta');

$routes->get('/', 'Home::index');
