<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->group('sign-in',['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('', 'Login::form'); //url normal
    $routes->post('', 'Login::store'); //al enviar un form en method post
});
$routes->get('/logout', 'Login::logout'); //url normal


$routes->group('/sign-up',['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('', 'SignUp::form'); //url normal
    $routes->post('', 'SignUp::store'); //al enviar un form en method post
});

$routes->get('/', 'Home::index'); //url normal

$routes->group('/movies',['namespace' => 'App\Controllers','filter' => 'before'], function ($routes) {
    $routes->get('', 'Movies::form' ); //url normal
});

$routes->group('/movie/(:num)',['namespace' => 'App\Controllers','filter' => 'before'], function ($routes) {
    $routes->get('', 'Movie::index/$1'); //url normal
    $routes->post('', 'Movie::comment/$1' ); //url normal
});

$routes->group('/favorites',['namespace' => 'App\Controllers','filter' => 'before'], function ($routes) {
    $routes->get('', 'Favorites::index'); //url normal
    $routes->post('', 'Favorites::save' ); //url normal
});

$routes->group('/shared',['namespace' => 'App\Controllers','filter' => 'before'], function ($routes) {
    $routes->get('', 'Shared::index'); //url normal
    $routes->post('', 'Shared::save' ); //url normal
});


