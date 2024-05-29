<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/sewa', 'Home::sewa');
$routes->get('/mobil', 'Home::mobil');
$routes->get('/login', 'LoginController::login');
$routes->post('/login', 'LoginController::loginAction');

$routes->post('/rent-form', 'Home::create');
$routes->post('/rent-edit/(:num)', 'Home::edit/$1');
