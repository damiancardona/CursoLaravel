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

Route::get('/create', function () {

    $user = User::create([
        'name' => 'Damian',
        'email' => 'dc@dc.com',
        'password' => bcrypt('123456'),
        'gender' => 'm',
        'biography' => 'wgfnc  iqñpwdnj pqwed'
    ]);

    return 'Usuario Guardado';
});

Route::get('/update-user', function () {

    $user = User::find(2);

    $user->gender = 'm';
    $user->biography = 'wsxwsx';

    $user->save();

    return 'Usuario Actualizado';
});
