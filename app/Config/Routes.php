<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');

/*rutas del Registro de Usuarios*/ 
$routes->get('/registro','usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');


/*rutas del login*/ 
$routes->get('/login','login_controller');
/* $routes->get('/login', 'Login_controller::index'); */
$routes->post('/enviarlogin','login_controller::auth');
$routes->get('/panel','Panel_controller::index',['filter' => 'auth']);
$routes->get('/logout','login_controller::logout');


//rutas para admin
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/create', 'Admin::create');
$routes->post('/admin/store', 'Admin::store');//cambiar por otra ruta luego
$routes->get('/admin/edit/(:num)', 'Admin::edit');
$routes->post('/admin/update/(:num)', 'Admin::update');
$routes->post('/admin/delete/(:num)', 'Admin::delete');




if (  is_file(APPPATH . 'config/'. ENVIRONMENT . 'Routes.php')){
    require APPPATH . 'config' . ENVIRONMENT . 'Routes.php'; 
}


