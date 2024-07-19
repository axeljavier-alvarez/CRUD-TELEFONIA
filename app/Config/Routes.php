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
// Planes
$routes->get('nuevo_plan', 'PlanesController::nuevoPlan');
$routes->post('agregar_plan', 'PlanesController::agregarPlan');
// Clientes
$routes->get('nuevo_cliente', 'ClientesController::nuevoCliente');
$routes->post('agregar_cliente', 'ClientesController::agregarCliente');
// Lineas de telefonia
$routes->get('nueva_linea', 'LineasTelefonicasController::nuevaLinea');
$routes->post('agregar_linea', 'LineasTelefonicasController::agregarLinea');
/* RUTA PARA ELIMINAR */
$routes->get('eliminar_cliente/(:num)','ClientesController::eliminarCliente/$1');

