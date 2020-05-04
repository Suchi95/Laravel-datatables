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
//Route::get('home','TestController@index');
Route::get('sign','TestController@signup');
Route::post('store','TestController@store');
Route::get('login','TestController@login');
Route::post('loginstore','TestController@loginstore');


 // Route::group(['middleware'=>'CheckIsSignup'], function(){
 //   Route::get('home','TestController@index');
 //    });
   //For Admin pannel
 Route::group(['middleware'=>'CheckifAdmin'], function(){
 	Route::get('Admin/index','TestController@index');
 });
// //For User pannel
   Route::group(['middleware'=>'CheckifUser'], function(){
 	Route::get('User/index','TestController@User_index');
 });
 

 Route::get('logout','TestController@logout');

//validation
Route::get('teacher-add', 'TeacherController@add');
Route::post('teacher-store', 'TeacherController@store');


//crud
Route::get('add','LaravelController@add');
Route::get('list','LaravelController@all');

Route::post('store','LaravelController@store');
//edit
Route :: get('edit/{id}','LaravelController@edit');
Route :: post('update/{id}','LaravelController@update');
Route :: get('delete/{id}','LaravelController@delete');

//Jquery Validation
Route::get('contact-us','ContactFormController@index');
Route::post('save-contact','ContactFormController@store');
//datatable
Route::get('create', 'DisplayDataController@create');
Route::get('index', 'DisplayDataController@index');