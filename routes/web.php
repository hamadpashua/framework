<?php
$router = new AltoRouter();

$router->map('POST', '/', 'App\Http\Controllers\WelcomeController@index', 'index');
$router->map('GET', '/logout', 'App\Http\Controllers\WelcomeController@logout', 'logout');


$router->map('GET', '/test', 'App\Http\Controllers\Admin\TestMidController@test', 'test');