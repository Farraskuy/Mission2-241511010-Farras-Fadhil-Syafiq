<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('/hello-world', 'HelloWorld::index');
$routes->get('/html-table', 'HelloWorld::html_table');

$routes->get("/mahasiswa", "Mahasiswa::index");
$routes->get("/mahasiswa/tambah", "Mahasiswa::tambah");
$routes->post("/mahasiswa/tambah", "Mahasiswa::store");
$routes->get("/mahasiswa/detail/(:num)", "Mahasiswa::detail/$1");
$routes->get("/mahasiswa/edit/(:num)", "Mahasiswa::edit/$1");
$routes->put("/mahasiswa/edit/(:num)", "Mahasiswa::update/$1");
$routes->get("/mahasiswa/delete/(:num)", "Mahasiswa::delete/$1");
$routes->delete("/mahasiswa/delete/(:num)", "Mahasiswa::destroy/$1");
