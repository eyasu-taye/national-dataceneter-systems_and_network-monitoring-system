<?php

use Illuminate\Support\Facades\Route;
use App\user;

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
Route::get('/reg', function () {
    return view('welcome00');
});
Route::get('/', function () {
    return view('welcome0');
});
Route::get('/{id1}/{id2}', 'systemcontroller@loginhome')->middleware('authen');;
Route::match(['get', 'post'], 'monitoring', 'systemcontroller@monitoring');
Route::match(['get', 'post'], 'registernewdomain', 'systemcontroller@registernewdomain');
Route::match(['get', 'post'], 'checksystems', 'systemcontroller@checksystems');
Route::match(['get', 'post'], 'show_to_update_domain', 'systemcontroller@show_to_update_domain');
Route::match(['get', 'post'], 'update_domain', 'systemcontroller@update_domain');
Route::match(['get', 'post'], 'register_user', 'systemcontroller@register_user');
Route::match(['get', 'post'], 'show_to_update_user', 'systemcontroller@show_to_update_user');
Route::match(['get', 'post'], 'update_user', 'systemcontroller@update_user');
Route::match(['get', 'post'], 'ourcustmers', 'systemcontroller@ourcustmers');

Route::match(['get', 'post'], 'network', 'systemcontroller@network');
Route::match(['get', 'post'], 'checknetwork', 'systemcontroller@checknetwork');
Route::match(['get', 'post'], 'registernewnet', 'systemcontroller@registernewnet');
