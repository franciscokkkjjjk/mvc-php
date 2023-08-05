<?php
use core\Router;

$router = new Router();
// $router->get('MyRouter', "MyController@Metodo");
$router->get('/', 'HomeController@index');
$router->get('/cachaca', "HomeController@cachaca");
$router->get('/sobre/{nome}/{au}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');