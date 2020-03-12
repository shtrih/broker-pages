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

Route::middleware('auth')->prefix('/broker')->group(function () {
    // Заявки
    Route::get('/requests', 'RequestsController@index')->name('requests');
    // Статистика по заявкам
    Route::get('/requests/statistics', 'HomeController@index')->name('requests-stat');
    // Заявки конкретного типа
    Route::get('/requests/{request_type}', 'HomeController@index')->name('request-type');
    // Конкретная заявка
    Route::get('/requests/{request_type}/{request_id}', 'HomeController@index')->name('request-id');
    // Статистика по заявкам конкретного типа
    Route::get('/requests/{request_type}/statistics', 'HomeController@index')->name('request-type-stat');

    // Объявления
    Route::get('/advertisements', 'HomeController@index')->name('ads');
    Route::get('/advertisements/{id}', 'HomeController@index')->name('ad');
    Route::get('/advertisements//{id}', 'HomeController@index');

    // Сообщения
    Route::get('/messages', 'HomeController@index')->name('messages');
    // Проверка автомобиля
    Route::get('/vehicle-check', 'HomeController@index')->name('vehicle-check');
    // Настройки
    Route::get('/settings', 'HomeController@index')->name('settings');
});
