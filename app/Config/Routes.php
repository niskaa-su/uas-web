<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/pemesanan', 'Pemesanan::index');
$routes->get('/add_data_pemesanan', 'Pemesanan::add_data_pemesanan');
$routes->post('/proses_data_pemesanan', 'Pemesanan::proses_data_pemesanan');

//$routes->get('maskapai', 'Maskapai::maskapai');
$routes->setAutoRoute(true);