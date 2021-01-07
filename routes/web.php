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
Route::resource('/users', 'userscontroller');
Route::get('/users/users/{id}','userscontroller@edit');
Route::view('/about', 'pages.about');


Route::resource('/animal', 'animalscontroller');
Route::get('/animals/{animal}','animalscontroller@destroy');
Route::resource('/category', 'categorycontroller');
Route::resource('/service', 'servicescontroller');
Route::get('/services/{service}','servicescontroller@destroy');
Route::get('/serviceratings/{service}/create', 'servicescontroller@createservicerating');
Route::POST('/serviceratings/{service}', 'servicescontroller@storeservicerating');
Route::get('/serviceratings/{service}','servicescontroller@ratings');
Route::get('/rating/{rating}','servicescontroller@otherratings');

Route::resource('/appointment', 'appointmentscontroller');
Route::POST('/appointment/service/{service}', 'appointmentscontroller@service');
// Route::POST('/appointment',function (){
// 	return 'appointment';
// });
Route::POST('/appointment', 'appointmentscontroller@store');

Route::get('/comments/create/{id}','commentscontroller@create');
Route::post('comments/create/{service}','commentscontroller@addservicecomment');
Route::post('comments/reply/{comment}','commentscontroller@replycomment');
Route::get('comments/delete/{comment}','commentscontroller@delete');

Route::resource('/comment','commentscontroller');
Route::resource('/accounts','accountscontroller');

// user protected routes
// Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
//     Route::get('/', 'HomeController@index')->name('user_dashboard');
// });

// // admin protected routes
// Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
//     Route::get('/', 'HomeController@index')->name('admin_dashboard');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
