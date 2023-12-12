<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// product
$routes->get('/product', 'Product::index');
$routes->get('/product(:segment)', 'Product::view');
$routes->post('/product', 'Product::create');
$routes->put('/product/(:segment)', 'Product::update');
$routes->delete('/product/(:segment)', 'Product::delete');
