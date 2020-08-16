<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/firewaters', [
    'as' => 'firewaters', 'uses' => 'ApiController@getFireWaters'
]);
$router->get('/firehydrants', [
    'as' => 'firehydrants', 'uses' => 'ApiController@getFireHydrants'
]);
$router->post('/firehydrants', [
    'as' => 'firehydrants', 'uses' => 'ApiController@postFireHydrants'
]);
$router->get('/firepillarhydrants', [
    'as' => 'firepillarhydrants', 'uses' => 'ApiController@getFirePillars'
]);
$router->post('/firepillarhydrants', [
    'as' => 'firepillarhydrants', 'uses' => 'ApiController@postFirePillars'
]);
