<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
$routes->get('/', 'Home::index');

$routes->get('/login', 'User::login');
$routes->post('/login/verify', 'User::loginVerify');
$routes->get('/register', 'User::register');
$routes->post('/register/save', 'User::registerSave');
$routes->get('/update', 'User::update');
$routes->post('/update/save', 'User::updateSave');
$routes->get('/update-pass', 'User::updatePass');
$routes->post('/update-pass/save', 'User::updatePassSave');
$routes->get('/logout', 'User::logout');

$routes->get('/competitive-programming', 'Competition::cp');
$routes->get('/ui-ux-design', 'Competition::ui_ux');
$routes->get('/photography', 'Competition::photo');

$routes->get('/dashboard', 'User::dashboard');
$routes->get('/dashboard/uploadImage', 'User::uploadImage');
$routes->post('/dashboard/uploadImage/verify', 'User::uploadImageVerify');

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
