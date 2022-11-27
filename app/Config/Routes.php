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
$routes->set404Override(function(){
    return view('404/404_view');
});
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
$routes->get('/', 'Home::index');
$routes->add('registration', 'Home::registration_view');
$routes->add('getstates', 'Home::getStateName');
$routes->add('register', 'Home::saveRegistrationDetails');
$routes->add('otp-verification', 'Home::verifyOTP');
$routes->add('otp-page', 'Home::otp_page');
$routes->add('verify_otp_page', 'Home::verify_otp_page');
$routes->add('email-verification/(:any)/(:any)', 'UserAuth::index/$1/$2');
$routes->add('Thank-you', 'UserAuth::thankYouPage');
$routes->add('About-Show', 'Home::aboutPage');
$routes->add('Dancing-Category', 'Home::dancingCategoryPage');
$routes->add('Singing-Category', 'Home::singingCategoryPage');
$routes->add('Modelling-Category', 'Home::modelingCategoryPage');
$routes->add('Prizes-and-offers', 'Home::prizesOffersPage');
$routes->add('Terms-and-conditions', 'Home::tandcPage');
$routes->add('Kids-fashion', 'Home::kidsFashionPage');
$routes->add('Acting-Category', 'Home::actingPage');

// Admin Panel Routes
$routes->add('portal-login', 'admin\AdminAuth::index');
// $routes->add('admin', 'admin\DashboardController::index');
// $routes->add('admin/dashboard', 'admin\DashboardController::index');
$routes->add('logout', 'admin\DashboardController::logout');

// Performers Routes
// $routes->add('admin/view-all-performers', 'admin\PerformerController::index');
// $routes->add('admin/performer/(:any)', 'admin\PerformerController::getUserDetailsById/$1');
// $routes->post('admin/performer/confirm-payment/(:any)', 'admin\PerformerController::receviedPayment/$1');

// Admin Panel Group Routing With Filters
$routes->group('', ['filter' => 'isLoggedIn'], function ($routes) {
    $routes->get('admin', 'admin\DashboardController::index');
    $routes->get('admin/dashboard', 'admin\DashboardController::index');

    // View All Participate
    $routes->add('admin/view-all-performers', 'admin\PerformerController::index');
    $routes->add('admin/performer/(:any)', 'admin\PerformerController::getUserDetailsById/$1');
    $routes->get('admin/performer/confirm-payment/(:any)', 'admin\PerformerController::receviedPayment/$1');
    $routes->get('admin/performer/email-verification/(:any)', 'admin\PerformerController::manuallyEmailVerification/$1');

    // All Users
    $routes->get('admin/all-users', 'admin\UsersController::index');
    $routes->add('admin/add-user', 'admin\UsersController::addUser');

    $routes->add('export-excel', 'admin\PerformerController::exportParticipateExcel');
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
