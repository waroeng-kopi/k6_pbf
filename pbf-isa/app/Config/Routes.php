<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/tampil', 'KendaliSatu::index');

$routes->get('/tampil/(:num)', 'KendaliSatu::tampil');