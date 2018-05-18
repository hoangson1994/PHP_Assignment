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

Route::get('/', 'StudentController@listStudent');
Route::post('/student','StudentController@saveStudent');
Route::get('/student/update/{id}','StudentController@updateStudent');
Route::get('/student/delete/{id}','StudentController@deleteStudent');
Route::get('/student','StudentController@viewAdd');

