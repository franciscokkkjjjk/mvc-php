<?php
use core\Router;

$router = new Router();
// $router->get('MyRouter', "MyController@Metodo");
$router->get('/', 'HomeController@index');
$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');