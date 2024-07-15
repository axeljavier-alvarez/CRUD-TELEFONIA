<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// regiones
$routes->get('ver_planes', 'Planes::index');
$routes->get('ver_lineas', 'LineasTelefonicas::index');
