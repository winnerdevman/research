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
$routes->get('/aaa', 'Home::index');

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

// Auth Route
$routes->get('auth/login', 'Auth\Login::index', ["as"=> "auth_login"]);
$routes->get('auth/login_password_recover', 'Auth\Login::login_password_recover', ["as"=> "auth_login_password_recover"]);
$routes->get('auth/login_password_reset', 'Auth\Login::login_password_reset', ["as"=>"auth_login_password_reset"]);
$routes->get("auth/logout", 'Auth\Login::logout', ["as"=> "auth_logout"]);
$routes->post("auth/login_request", 'Auth\Login::login_request', ["as"=> "auth_login_request"]);
$routes->post("auth/send_forgot_email", "Auth\Login::send_forgot_email", ["as"=> "auth_send_forgot_email"]);

// Dashboard
$routes->get("dashboard", 'Dashboard::index');
$routes->addRedirect('/', 'auth_login');