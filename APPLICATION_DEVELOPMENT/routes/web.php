<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
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


Route::group([
    'namespace' => 'App\Http\Controllers'
], function () {
    Route::get('/students', 'StudentsController@show');
    Route::get('/register', 'StudentsController@register');
    Route::post('/register', 'StudentsController@store');
    Route::get('/record/{id}', 'StudentsController@student_record');
    Route::post('/record/{id}', 'StudentsController@student_score');
   

});