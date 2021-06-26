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
$routes->setDefaultController('Pages/view');
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
//$routes->get('/pages/(:any)', 'Pages::view/$1');

//home;
$routes->get('/', 'Pages::view');
$routes->get('/homeAll', 'Pages::viewall');
$routes->get('/homeAll', 'Pages::viewallp');
//Services;
$routes->get('/services', 'Services::index');

/*add*/
$routes->match(['get', 'post'], 'Services/add', 'Services::add');
            //$routes->get('services/(:segment)', 'Services::view/$1');
$routes->get('services/(:segment)', 'Services::add/$1');
/*******/


/*edit*/ 
$routes->match(['get', 'post'], 'Services/edit', 'Services::edit');
$routes->get('services/edit/(:segment)', 'Services::edit/$1');
/********/

/*delete*/
$routes->match(['get', 'post'], 'Services/edit', 'Services::delete');
$routes->get('services/delete/(:segment)', 'Services::delete/$1');
/*******/

/*update*/
$routes->match(['get', 'post'], 'Services/update', 'Services::update');
$routes->get('services/update/(:segment)', 'Services::update/$1');
/*******/

$routes->get('services', 'Services::index');

$routes->get('/users', 'Users::index');

//dashboard
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/dashboard/logout', 'Dashboard::logout');

//profile
$routes->match(['get', 'post'], 'Users/editprofile', 'Users::editprofile');
$routes->get('users/editprofile/(:segment)', 'Users::editprofile/$1');

//updateprofile
$routes->match(['get', 'post'], 'Users/update', 'Users::update');
$routes->get('users/update/(:segment)', 'Users::update/$1');

//users;
$routes->get('/users', 'Users::index');

//$routes->match(['get', 'post'], '/users', 'Users::index');

//About;
$routes->get('/about', 'About::index');

/*******/


/*edit about*/ 
$routes->match(['get', 'post'], 'About/edit', 'About::edit');
$routes->get('about/edit/(:segment)', 'About::edit/$1');
/********/


/*update about*/
$routes->match(['get', 'post'], 'About/update', 'About::update');
$routes->get('about/update/(:segment)', 'About::update/$1');
/*******/

//demo upload file;
$routes->get('/demo', 'Demo::demo1');
$routes->match(['get', 'post'], 'Demo/upload', 'Demo::upload');
$routes->get('demo/upload/(:segment)', 'Demo::upload/$1');

//Projects;
$routes->get('/projects', 'Projects::index');


/*add Projects*/
$routes->match(['get', 'post'], 'Projects/add', 'Projects::add');
            //$routes->get('services/(:segment)', 'Services::view/$1');
$routes->get('projects/(:segment)', 'Projects::add/$1');
/*******/


/*edit Projects*/ 
$routes->match(['get', 'post'], 'Projects/edit', 'Projects::edit');
$routes->get('projects/edit/(:segment)', 'Projects::edit/$1');
/********/

/*delete Projects*/
$routes->match(['get', 'post'], 'Projects/edit', 'Projects::delete');
$routes->get('projects/delete/(:segment)', 'Projects::delete/$1');
/*******/

/*update Projects*/
$routes->match(['get', 'post'], 'Projects/update', 'Projects::update');
$routes->get('projects/update/(:segment)', 'Projects::update/$1');
/*******/

//Contacts;
$routes->get('/contacts', 'Contacts::index');


/*add Projects*/
$routes->match(['get', 'post'], 'Contacts/add', 'Contacts::add');
            //$routes->get('services/(:segment)', 'Services::view/$1');
$routes->get('contacts/(:segment)', 'Contacts::add/$1');
/*******/


//pages;
$routes->get('(:any)', 'Pages::view/$1');

/**
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
