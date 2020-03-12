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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    // Заявки
    Route::get('/requests', 'RequestsController@index');
    // Статистика по заявкам
    Route::get('/requests/statistics', 'HomeController@index');
    // Заявки конкретного типа
    Route::get('/requests/{request_type}', 'HomeController@index');
    // Конкретная заявка
    Route::get('/requests/{request_type}/{request_id}', 'HomeController@index');
    // Статистика по заявкам конкретного типа
    Route::get('/requests/{request_type}/statistics', 'HomeController@index');

    // Объявления
    Route::get('/advertisements', 'HomeController@index');
    Route::get('/advertisements/{id}', 'HomeController@index');
    Route::get('/advertisements//{id}', 'HomeController@index');

    // Сообщения
    Route::get('/messages', 'HomeController@index');
    // Проверка автомобиля
    Route::get('/vehicle-check', 'HomeController@index');
    // Настройки
    Route::get('/settings', 'HomeController@index');
});
