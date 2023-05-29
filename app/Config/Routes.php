<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Agendarapat2::index');

$routes->get('/dashboard', 'Agendarapat2::index');

$routes->get('/hello_view', 'Agendarapat2::testing');

$routes->get('/galeri', 'media::galeri');
$routes->get('/priviewdisplay/(:any)', 'Agendarapat2::Priview/$1');
$routes->get('/kalendar', 'Agendarapat2::kalendar2');
$routes->get('/livedashboard', 'Agendarapat2::livedashboard');
$routes->get('/pideo', 'media::Pideo');
$routes->get('/listpreview', 'media::listpreview');

$routes->get('/daftarruang', 'cruddaftarruang::daftarruang');
$routes->get('/daftarruang/(:any)', 'cruddaftarruang::store/$1');
$routes->post('/cruddaftarruang/save', 'cruddaftarruang::save');
$routes->post('/cruddaftarruang/update/(:any)', 'cruddaftarruang::update/$1');
$routes->get('/editruangan/(:any)', 'cruddaftarruang::ubah/$1');
$routes->delete('/daftarruang/(:edit)', 'cruddaftarruang::delete/$1');


$routes->get('/jadwalagenda', 'Agendarapat2::jadwalagenda');
$routes->get('/edit/(:num)', 'crudjadwal::ubah/$1');
$routes->get('/jadwalagenda/(:num)', 'crudjadwal::save/$1');
$routes->post('/crudjadwal/update/(:any)', 'crudjadwal::update/$1');


$routes->get('/listuser', 'user::index');
$routes->get('/daftar', 'Register::daftar');
$routes->post('/register/process', 'Register::process');
$routes->get('/masuk', 'Register::index');
$routes->post('/Register/prosesmasuk', 'register::prosesmasuk');
$routes->get('/logout', 'Register::logout');

$route['upload-image'] = 'media';
$routes->post('/pideo/store-image', 'media::store');
// $route['store-image'] = 'media/store';
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
