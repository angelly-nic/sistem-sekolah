<?php
require_once './app/core/Router.php';

use App\Core\Router;

$router = new Router();

//Register Routes
$routes->add('GET','/students','StudentController','index');
$routes->add('GET','/students/create','StudentController','create');
$routes->add('GET','/students/{id}','StudentController','show');

$router->run();
?>