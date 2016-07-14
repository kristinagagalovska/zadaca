<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group([
    'prefix' => 'parameters',
], function (Router $router) {
    $router->get('/', 'ParametersController@index');
    $router->post('/', 'ParametersController@store')->name('calculate');
});