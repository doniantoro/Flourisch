<?php

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
    return view('index');
});


Route::get('/admin/dashboard/order','controllerAdmin@order');
Route::get('/admin/dashboard/event','controllerAdmin@event');

Route::get('/admin/dashboard/detail_event/{id}','controllerAdmin@detail_event');
Route::get('/admin/dashboard/delete_event/{id}','controllerAdmin@delete_event');

Route::get('/admin/dashboard/input_event/','controllerAdmin@input_event');
Route::post('/admin/dashboard/post_event/','controllerAdmin@post_event');

Route::get('/admin/dashboard/edit_event/{id}','controllerAdmin@edit_event');
Route::post('/admin/dashboard/update_event/{id}','controllerAdmin@update_event');
Auth::routes();

Route::get('/admin/dashboard/order','controllerAdmin@order');
Route::get('/home', 'HomeController@index')->name('home');
