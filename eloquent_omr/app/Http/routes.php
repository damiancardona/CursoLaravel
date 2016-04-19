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

use EloquentORM\User;
use Faker\Factory as Faker;

//CRUD User
Route::get('/',[
    'as' => 'home',
    'uses' => 'PageController@home'
]);
Route::get('/all',[
    'as' => 'all',
    'uses' => 'QueryController@EloquentAll'
]);
Route::get('/get/{gender}',[
    'as' => 'get',
    'uses' => 'QueryController@EloquentGet'
])->where('gender', '[f, m]');
Route::get('/get-custom',[
    'as' => 'get-custom',
    'uses' => 'QueryController@EloquentGetCustom'
])->where('gender', '[f, m]');