<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);


// $routes->get('/lihat-laporan', 'Laporan::index');
$routes->get('/lihat-laporan', 'Laporan::tampilLaporan');
$routes->get('/pdf_view', 'PdfController::index');
$routes->get('/pdf/generate', 'PdfController::generate');