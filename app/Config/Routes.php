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

/* Registro de Usuarios*/ 
$routes->get('/registro','usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');


/* login*/ 
$routes->get('/login','login_controller');
/* $routes->get('/login', 'Login_controller::index'); */
$routes->post('/enviarlogin','login_controller::auth');
$routes->get('/panel','Panel_controller::index',['filter' => 'auth']);
$routes->get('/logout','login_controller::logout');


/* edit y eliminar */
$routes->get('usuario/delete/(:num)', 'usuario_controller::delete/$1');
$routes->get('usuario/edit/(:num)', 'usuario_controller::edit/$1');
$routes->post('usuario/update/(:num)', 'usuario_controller::update/$1');

/*nuevo usuario */
$routes->get('/usuario/new', 'usuario_controller::newUser');
$routes->post('/usuario_controller/saveNewUser', 'usuario_controller::saveNewUser');






if (  is_file(APPPATH . 'config/'. ENVIRONMENT . 'Routes.php')){
    require APPPATH . 'config' . ENVIRONMENT . 'Routes.php'; 
}


