<?php namespace Config;

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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');

// User routes
$routes->match(['get','post'],'/','UserController::index',['filter'=>'notBackUrl']);
$routes->get('logout', 'UserController::logout');
$routes->match(['get','post'],'/register','UserController::register');
$routes->match(['get','post'],'profile','UserController::updateProfile',['filter'=>'checkUsers']);

// Explore event routes
$routes->get('explore','ExploreController::showExplore',['filter'=>'checkUsers']);
$routes->match(['get','post'],'userQuit','ExploreController::userQuit');
$routes->match(['get','post'],'userJoin','ExploreController::userJoin');

// Your events routes
$routes->get('event','EventController::showEvent',['filter'=>'checkUsers']);
$routes->get('deleteEvent/(:num)','EventController::deleteEvent/$1');
$routes->get('yourEvents','YourEventController::showYourEvent',['filter'=>'checkUsers']);
$routes->match(['get','post'],'createEvent','YourEventController::createEvent',['filter'=>'checkUsers']);
$routes->match(['get','post'],'updateYourEvent','YourEventController::updateYourEvent');
$routes->add('deleteYourEvent/(:num)','YourEventController::deleteYourEvent/$1');

// Category routes
$routes->get('category','AdminController::showCategory',['filter'=>'checkUsers']);
$routes->match(['get','post'],'insertCategory','AdminController::insertCategory',['filter'=>'checkUsers']);
$routes->match(['get','post'],'update','AdminController::update',['filter'=>'checkUsers']);
$routes->match(['get','post'],'deleteCategory','AdminController::deleteCategory',['filter'=>'checkUsers']);

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
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
