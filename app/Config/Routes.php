<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/sewa', 'Home::sewa');
$routes->get('/mobil', 'Home::mobil');