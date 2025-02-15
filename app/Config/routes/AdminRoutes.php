<?php

namespace Config;
use App\Controllers\Admin;
// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
// if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
//     require SYSTEMPATH . 'Config/Routes.php';
// }

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
// $routes->setDefaultNamespace('App\Controllers');
// $routes->setDefaultController('Home');
// $routes->setDefaultMethod('index');
// $routes->setTranslateURIDashes(false);
// $routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
// $routes->add('registration', 'Home::registration_view');
// $routes->add('getstates', 'Home::getStateName');
// $routes->add('register', 'Home::saveRegistrationDetails');
// $routes->add('otp-verification', 'Home::verifyOTP');
// $routes->add('otp-page', 'Home::otp_page');
// $routes->add('verify_otp_page', 'Home::verify_otp_page');
// $routes->add('email-verification/(:any)/(:any)', 'UserAuth::index/$1/$2');
// $routes->add('Thank-you', 'UserAuth::thankYouPage');
// $routes->add('About-Show', 'Home::aboutPage');
// $routes->add('Dancing-Category', 'Home::dancingCategoryPage');
// $routes->add('Singing-Category', 'Home::singingCategoryPage');
// $routes->add('Modeling-Category', 'Home::modelingCategoryPage');

// Admin Panel Routes
$routes->add('admin/dashboard', 'Admin\DashboardController::index');

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
// if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
//     require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
// }
