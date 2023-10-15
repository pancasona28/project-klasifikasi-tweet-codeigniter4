<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/form', 'Home::form');
$routes->get('/label', 'Home::label');
$routes->get('/tabel', 'Home::tabel');
$routes->post('save/(:segment)/(:num)', 'Home::save/$1/$2');




