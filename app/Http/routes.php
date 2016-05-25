<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::auth();

Route::resource('/faucets', 'FaucetsListController');

Route::get('/home', 'HomeController@index');

Route::post('/payment', 'MainFaucetController@paymentFaucet')->middleware([ 'auth', 'timer' ]);;

Route::get('/{refferal?}', 'MainFaucetController@getFaucet');



