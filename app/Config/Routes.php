<?php
use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
// VISTAS
$routes->get('/', 'Home::index');
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
/* --------- RUTA PARA ELIMINAR -------*/
// 1. Eliminar cliente
$routes->get('eliminar_cliente/(:num)','ClientesController::eliminarCliente/$1');
// 2. Eliminar plan
$routes->get('eliminar_plan/(:num)', 'PlanesController::eliminarPlan/$1');
// 3. Eliminar lineas telefonicas
$routes->get('eliminar_linea/(:num)', 'LineasTelefonicasController::eliminarLinea/$1');

/* RUTA PARA ACTUALIZAR*/

// 1. Actualizar cliente
$routes->get('buscar_cliente/(:num)', 'ClientesController::buscarCliente/$1');
$routes->post('modificar_cliente', 'ClientesController::modificarCliente');

// 2. Actualizar plan
$routes->get('buscar_plan/(:num)', 'PlanesController::buscarPlan/$1');
$routes->post('modificar_plan', 'PlanesController::modificarPlan');
// 3. Actualizar lineas telefonicas
$routes->get('buscar_linea/(:num)', 'LineasTelefonicasController::buscarLinea/$1');
$routes->post('modificar_linea', 'LineasTelefonicasController::modificarLinea');
