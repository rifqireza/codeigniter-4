<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'LandingPage::index');
$routes->get('/register', 'Home::register');
$routes->get('/web/schedule', 'Schedule::index');
$routes->get('/web/schedule/(:segment)', 'Schedule::detail/$1');

$routes->get('/web/education', 'Education::index');
$routes->get('/web/education/add', 'Education::add');
$routes->post('/web/education/save', 'Education::save');
$routes->get('/web/education/delete/(:segment)', 'Education::delete/$1');
$routes->get('/web/education/detail/(:segment)', 'Education::detail/$1');
$routes->post('/web/education/edit/(:segment)', 'Education::edit/$1');