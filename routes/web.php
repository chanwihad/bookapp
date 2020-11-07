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

$router->get('/key', function () {
    return \Illuminate\Support\Str::random(32);
});

$router->get('books', 'Controller@index');

$router->get('/books/{id}', 'Controller@show');

$router->post('books', 'Controller@store');

$router->put('books/{id}', 'Controller@update');

$router->delete('books/{id}', 'Controller@destroy');

$router->get('authors', 'AuthorsController@index');

$router->get('/authors/{id}', 'AuthorsController@show');

$router->post('authors', 'AuthorsController@store');

$router->put('authors/{id}', 'AuthorsController@update');

$router->delete('authors/{id}', 'AuthorsController@destroy');