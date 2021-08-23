<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['title' => 'sharing vision']);
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::redirect('/here', '/greeting');

Route::get('users/{name}', function ($name='drew') {
return $name;
});

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
        return "adminnya si drews" ;
    });
});


