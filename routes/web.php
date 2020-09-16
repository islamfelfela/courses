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
    return view('welcome');
});

Route::group(['prefix'=>'admin', 'middleware'=>['auth'=>'admin'], 'name'=>'admin.'],function(){
    Route::resource('/', 'AdminController');
});

Route::post('/courses/enroll/{id}', 'CoursesController@enroll')->name('courses.enroll');
Route::resource('/courses', 'CoursesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

