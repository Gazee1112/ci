<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->get('examples/anggota_management', 'Examples::anggota_management');
$routes->get('examples/anggota_management/(:any)', 'Examples::anggota_management/$1');
$routes->post('examples/anggota_management/(:any)', 'Examples::anggota_management/$1');

$routes->get('examples/orders_management', 'Examples::orders_management');
$routes->get('examples/orders_management/(:any)', 'Examples::orders_management/$1');
$routes->post('examples/orders_management/(:any)', 'Examples::orders_management/$1');

$routes->get('examples/products_management', 'Examples::products_management');
$routes->get('examples/products_management/(:any)', 'Examples::products_management/$1');
$routes->post('examples/products_management/(:any)', 'Examples::products_management/$1');

$routes->get('examples/pengunjung_management', 'Examples::pengunjung_management');
$routes->get('examples/pengunjung_management/(:any)', 'Examples::pengunjung_management/$1');
$routes->post('examples/pengunjung_management/(:any)', 'Examples::pengunjung_management/$1');

$routes->get('examples/buku_management', 'Examples::buku_management');
$routes->get('examples/buku_management/(:any)', 'Examples::buku_management/$1');
$routes->post('examples/buku_management/(:any)', 'Examples::buku_management/$1');

$routes->get('examples/karyawan_management', 'Examples::karyawan_management');
$routes->get('examples/karyawan_management/(:any)', 'Examples::karyawan_management/$1');
$routes->post('examples/karyawan_management/(:any)', 'Examples::karyawan_management/$1');

$routes->get('examples/bukuHadir_management', 'Examples::bukuHadir_management');
$routes->get('examples/bukuHadir_management/(:any)', 'Examples::bukuHadir_management/$1');
$routes->post('examples/bukuHadir_management/(:any)', 'Examples::bukuHadir_management/$1');

$routes->get('examples/peminjaman_management', 'Examples::peminjaman_management');
$routes->get('examples/peminjaman_management/(:any)', 'Examples::peminjaman_management/$1');
$routes->post('examples/peminjaman_management/(:any)', 'Examples::peminjaman_management/$1');

$routes->get('examples/pengembalian_management', 'Examples::pengembalian_management');
$routes->get('examples/pengembalian_management/(:any)', 'Examples::pengembalian_management/$1');
$routes->post('examples/pengembalian_management/(:any)', 'Examples::pengembalian_management/$1');

$routes->get('examples/denda', 'Examples::denda');
$routes->get('examples/denda/(:any)', 'Examples::denda/$1');
$routes->post('examples/denda/(:any)', 'Examples::denda/$1');


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
