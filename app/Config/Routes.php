<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'about::index');
$routes->get('/contact', 'contact::index');
$routes->get('/activities', 'activities::index');
$routes->get('/news', 'news::index');
$routes->post('/contact/send', 'contact::send');

