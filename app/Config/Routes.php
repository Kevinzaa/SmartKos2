<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->post('report/create', 'ReportController::create');
$routes->put('report/updateStatus/(:num)', 'ReportController::updateStatus/$1');
$routes->get('report', 'ReportController::index');
$routes->get('report/status/(:any)', 'ReportController::getByStatus/$1');
$routes->get('report/stats', 'ReportController::stats');
$routes->delete('report/delete/(:num)', 'ReportController::deleteReport/$1');
$routes->post('auth/register', 'AuthController::register');
$routes->post('auth/login', 'AuthController::login');
$routes->get('/register', 'AuthController::registerView');
$routes->get('/login', 'AuthController::registerView'); 
$routes->get('/home', 'ReportController::home');
$routes->get('/', 'HomeController::welcome');

$routes->group('maintenance', function ($routes) {
    $routes->post('create', 'MaintenanceController::create');
    $routes->get('/', 'MaintenanceController::index');       // GET /maintenance/
});
