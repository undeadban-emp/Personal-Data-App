<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//sa pag open na dayun mo tunga

Route::get('/', function () {
    return view('auth.login');
});


//code sacustom na logout
Route::post('/user/logout', function () {
    Auth::logout();
    return redirect('login');
})->name('custom.logout');

Auth::routes(['logout' => true]);
////
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'Test\TestController@index');


Route::view('/add','add')->name('add');
Route::get('/add', 'PersonalDataController@addPersonalInfo');


