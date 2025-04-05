<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Admin
$routes->get('/admin', 'Admin::index');

$routes->get('/login', 'Login::index');
$routes->get('/login-admin', 'Login::LoginAdmin');

