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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'StaticPagesController@home')->name('home');//首页
Route::get('/help', 'StaticPagesController@help')->name('help');//帮助页
Route::get('/about', 'StaticPagesController@about')->name('about');//关于页

Route::get('/signup','UsersController@create')->name('signup');//注册
Route::resource('users', 'UsersController');

Route::get('login','SessionsController@create')->name('login');//显示登录页
Route::post('login','SessionsController@store')->name('login');//创建新会话（登录）
Route::delete('logout','SessionsController@destroy')->name('logout');//销毁会话（退出登录）
