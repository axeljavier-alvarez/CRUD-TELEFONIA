<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// regiones
$routes->get('ver_planes', 'PlanesController::index');
$routes->get('ver_lineas', 'LineasTelefonicasController::index');
$routes->get('ver_clientes', 'ClientesController::index');


/* -------- RUTAS DE INSERTAR ------- */
$routes->get('nuevo_plan', 'PlanesController::nuevoPlan');
$routes->post('agregar_plan', 'PlanesController::agregarPlan');
