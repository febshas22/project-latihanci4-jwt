<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('login', 'Auth::login');

$routes->group('api', ['filter' => 'jwt'], function($routes) {
    $routes->resource('mahasiswa');
});
$routes->group('mahasiswa', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('', 'Mahasiswa::index');
    $routes->get('(:num)', 'Mahasiswa::show/$1');
    $routes->post('', 'Mahasiswa::create');
    $routes->put('(:num)', 'Mahasiswa::update/$1');
    $routes->delete('(:num)', 'Mahasiswa::delete/$1');
});
