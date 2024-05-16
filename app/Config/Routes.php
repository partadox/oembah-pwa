<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->set404Override(function( $message = null )
{
    
    $data = [
        'title'     => '404 Page not found',
        'nav_active'=> null
    ];
    echo view('errors/error404', $data);
});
$routes->setAutoRoute(false);
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->get('/', 'FE\Auth::login');
$routes->get('/login', 'FE\Auth::login');
$routes->get('/register', 'FE\Auth::register');
$routes->get('/otp-validation', 'FE\Auth::otp_validation');
$routes->get('/dashboard', 'FE\Dashboard::index');
$routes->get('/order', 'FE\Order::index');
$routes->get('/order-new', 'FE\Order::new');
$routes->get('/customer', 'FE\Customer::index');
$routes->get('/profile', 'FE\Profile::index');
