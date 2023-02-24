<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override("App\Controllers\NotFound");
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
$routes->get("login", "Auth::login");
$routes->get("dashboard", "Dashboard");

$routes->group('profile', static function ($router) {
    $router->get('/', 'Profile::index');
    $router->get('tambah', 'Profile::tambah');
    $router->get('edit/(:num)', 'Profile::edit/$1');
    $router->get('delete/(:num)', 'Profile::delete/$1');
    $router->get('password/(:num)', 'Profile::password/$1');

    $router->post("/", "Profile::add");
    $router->post("(:num)", "Profile::update/$1");
    $router->post('password/(:num)', 'Profile::gantiPassword/$1');
});


$routes->group('user', static function ($router) {
    $router->get('/', 'User::index');
    $router->get('tambah', 'User::tambah');
    $router->get('edit/(:num)', 'User::edit/$1');
    $router->get('delete/(:num)', 'User::delete/$1');
    $router->get('password/(:num)', 'User::password/$1');

    $router->post("/", "Profile::add");
    $router->post("(:num)", "Profile::update/$1");
    $router->post('password/(:num)', 'Profile::gantiPassword/$1');
});


$routes->group('kriteria', static function ($router) {
    $router->get('/', 'Kriteria::index');
    $router->get('table', 'Kriteria::table');
    $router->get('tambah', 'Kriteria::tambah');
    $router->get('edit/(:num)', 'Kriteria::edit/$1');
    $router->get('delete/(:num)', 'Kriteria::delete/$1');
});




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
