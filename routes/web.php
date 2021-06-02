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

Route::get('/home', function () {
    return redirect('index');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'Controller@dataOutputIndex');

Route::get('/table', 'Controller@dataOutput');

Route::get('/report', 'Controller@dataOutputReport');

Route::get('/grades', 'Controller@dataOutputGrade');

Route::get('/table/Ready', ['as' => 'upload_data', 'uses' => 'Controller@getFormData']);
Route::post('/table/Ready',['as' => 'upload_dates','uses' => 'Controller@uploadData']);

Route::get('/grades/Ready', ['as' => 'upload_grade', 'uses' => 'Controller@getFormDataGrades']);
Route::post('/grades/Ready',['as' => 'upload_grades','uses' => 'Controller@uploadDataGrades']);
