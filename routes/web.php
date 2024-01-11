<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['prefix'=>'api'],function()use($router){
    $router->get('artist',['uses'=>'ArtistController@index']);
    $router->get('artist/{id}',['uses'=>'ArtistController@show']);
    $router->delete('artist/{id}',['uses'=>'ArtistController@destroy']);
    $router->put('artist/{id}',['uses'=>'ArtistController@update']);
    $router->post('artist',['uses'=>'ArtistController@create']);

    $router->get('konser',['uses'=>'KonserController@index']);
    $router->get('konser/{id}',['uses'=>'KonserController@show']);
    $router->delete('konser/{id}',['uses'=>'KonserController@destroy']);
    $router->put('konser/{id}',['uses'=>'KonserController@update']);
    $router->post('konser',['uses'=>'KonserController@create']);


    $router->get('pelanggan',['uses'=>'PelangganController@index']);
    $router->get('pelanggan/{id}',['uses'=>'PelangganController@show']);
    $router->delete('pelanggan/{id}',['uses'=>'PelangganController@destroy']);
    $router->put('pelanggan/{id}',['uses'=>'PelangganController@update']);
    $router->post('pelanggan',['uses'=>'PelangganController@create']);

    $router->get('pembelian',['uses'=>'PembelianController@index']);
    $router->get('pembelian/{id}',['uses'=>'PembelianController@show']);
    $router->delete('pembelian/{id}',['uses'=>'PembelianController@destroy']);
    $router->put('pembelian/{id}',['uses'=>'PembelianController@update']);
    $router->post('pembelian',['uses'=>'PembelianController@create']);

    $router->get('tiket',['uses'=>'TiketController@index']);
    $router->get('tiket/{id}',['uses'=>'TiketController@show']);
    $router->delete('tiket/{id}',['uses'=>'TiketController@destroy']);
    $router->put('tiket/{id}',['uses'=>'TiketController@update']);
    $router->post('tiket',['uses'=>'TiketController@create']);

    


});
