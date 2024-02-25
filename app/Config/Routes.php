<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Cine::cartelera');


$routes->get('Cine/cartelera', 'Cine::cartelera');


$routes->post('Cine/insertarVenta', 'Cine::insertarVenta');

$routes->post('Cine/insertarVenta', 'Cine::cartelera');

$routes->post('Cine/insertarPelicula', 'Cine::insertarPelicula');


$routes->get('Cine/agregarPelicula', 'Cine::agregarPelicula');
