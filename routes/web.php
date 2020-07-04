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
Route::get('/', 'AuthController@dashboard')->name('admin');
Route::get('/cadastro/user', 'AuthController@cadastroUser')->name('cadastro.user');
Route::post('/cadastro/user/do', 'AuthController@cadastroUserDo')->name('cadastro.user.do');
Route::get('/admin/login', 'AuthController@showLogin')->name('admin.login');
Route::post('/admin/login/do', 'AuthController@login')->name('admin.login.do');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');
