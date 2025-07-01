<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// 🆕 Add this line to show the product page
$routes->get('/products', 'ProductController::index');
