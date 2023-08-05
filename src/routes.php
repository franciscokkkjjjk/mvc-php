<?php
use core\Router;
use src\controllers\UsuariosController;

$router = new Router();
// $router->get('MyRouter', "MyController@Metodo");

$router->get('/', 'HomeController@index');

$router->get('/novo', 'UsuariosController@add');

$router->post('/novo', 'UsuariosController@addAction');

$router->get('/usuario/{id}/editar', 'UsuariosController@usuarioEdit');

$router->post('/usuario/{id}/editar', 'UsuariosController@usuarioEditAction');

$router->get('/usuario/{id}/excluir', 'UsuariosController@usuarioExcluirAction');