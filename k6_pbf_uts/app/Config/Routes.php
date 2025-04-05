<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//login page
$routes->get('/hallogin', 'LoginController::tampil');
$routes->post('/aksilogin', 'LoginController::logincoba');
//logout
$routes->get('/aksilogout', 'LoginController::aksi_logout');
//beranda web
$routes->get('/', 'NyobaController::tampil_utama');
$routes->get('/viewdatamhs', 'NyobaController::tampildatamhs',['filter' => 'proteksi']);
$routes->get('/viewdataguru', 'GuruController::tampildataguru',['filter' => 'proteksi']);
$routes->get('/viewdatakelas', 'KelasController::tampildatakelas',['filter' => 'proteksi']);
//insert
$routes->post('/tambahdata', 'NyobaController::tambahdatamhs'); //menggunakan post karna form methodnya post
$routes->post('/tambahdataguru', 'GuruController::tambahdataguru');
$routes->post('/tambahdatakelas', 'KelasController::tambahdatakelas');
//delete
$routes->post('/hapusdata', 'NyobaController::hapusdatamhs');
$routes->post('/hapusdataguru', 'GuruController::hapusdataguru');
$routes->post('/hapusdatakelas', 'KelasController::hapusdatakelas');
//update
$routes->post('/ubahdata', 'NyobaController::ubahdatamhs'); 
$routes->post('/ubahdataguru', 'GuruController::ubahdataguru'); 
$routes->post('/ubahdatakelas', 'KelasController::ubahdatakelas');

//nyoba user
$routes->get('/showuser', 'LoginController::show_user');
