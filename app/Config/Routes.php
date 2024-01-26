<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'auth\Login::index');
$routes->post("login/process","auth\Login::process");

$routes->group("",['filter'=>'UserFilter'],function($routes){
	$routes->get("dashboard","main\Dashboard::index");
});
