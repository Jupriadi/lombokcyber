<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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
$routes->group('', ['namespace' => 'Myth\Auth\Controllers'], function($routes) {
    // Login/out
    $routes->get('login', 'AuthController::login', ['as' => 'login']);
    $routes->post('login', 'AuthController::attemptLogin');
    $routes->get('logout', 'AuthController::logout');

    // Registration
    $routes->get('register', 'AuthController::register', ['as' => 'register']);
    $routes->post('register', 'AuthController::attemptRegister');

    // Activation
    $routes->get('activate-account', 'AuthController::activateAccount', ['as' => 'activate-account']);
    $routes->get('resend-activate-account', 'AuthController::resendActivateAccount', ['as' => 'resend-activate-account']);

    // Forgot/Resets
    $routes->get('forgot', 'AuthController::forgotPassword', ['as' => 'forgot']);
    $routes->post('forgot', 'AuthController::attemptForgot');
    $routes->get('reset-password', 'AuthController::resetPassword', ['as' => 'reset-password']);
    $routes->post('reset-password', 'AuthController::attemptReset');
});

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// admin routes
$routes->get('/', 'Home::index');
$routes->get('/baca/(:any)', 'Home::artikel/$1');
$routes->get('/kelas/(:any)', 'Home::kelas/$1');
$routes->get('/project/(:any)', 'Home::project/$1');
$routes->get('/masukkelas/(:any)', 'User\Masukkelas::$1');
$routes->get('/admin', 'Admin\Admin::index');
$routes->get('/memberarea', 'Admin\Admin::index');
$routes->get('/admin/project', 'Admin\Project\Project::index');
$routes->get('/admin/project/(:any)', 'Admin\Project\Project::$1');
$routes->add('/admin/controlproject/(:any)','Admin\Project\Controlproject::$1');
$routes->get('/admin/profil', 'Admin\Profil\Profil::index');
$routes->get('/admin/profil/(:num)', 'Admin\Profil\Profil::index/$1');
$routes->add('/admin/controlprofil/(:any)','Admin\Profil\Controlprofil::$1');
$routes->get('/admin/kelas', 'Admin\Kelas\Kelas::index');
$routes->get('/admin/kelas/(:num)', 'Admin\Kelas\Kelas::index/$1');
$routes->add('/admin/controlkelas/(:any)','Admin\Kelas\Controlkelas::$1');
$routes->add('/admin/controlmateri/(:any)','Admin\Kelas\Controlmateri::$1');
$routes->get('/admin/artikel', 'Admin\Artikel\Artikel::index');
$routes->get('/admin/artikel/(:any)', 'Admin\Artikel\Artikel::$1');
$routes->add('/admin/controlartikel/(:any)','Admin\Artikel\Controlartikel::$1');
$routes->get('/admin/akun', 'Admin\Akun\Akun::index');
$routes->get('/admin/akun/(:any)', 'Admin\Akun\Akun::$1');
$routes->add('/admin/controlakun/(:any)','Admin\Akun\Controlakun::$1');
$routes->get('/(:segment)', 'Home::$1');


// user routes

// $routes->get('/project', 'Home::project');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
