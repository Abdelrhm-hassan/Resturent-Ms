<?php

use Illuminate\Support\Facades\Auth;
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
Route::namespace('admin')->middleware('auth')->prefix('dashbord')->group(function(){
 
  // dashbord route
//  Route::get('/','profileConteoller@index')->name('dashbord');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

  
 
    // Catagories Routes
Route::get('/cats','CarController@index')->name('Admin.cats.index');
Route::get('/cats/create','CarController@create')->name('Admin.cats.create');
Route::get('/cats/edit/{id}','CarController@edit')->name('Admin.cats.edit');
Route::post('/cats/update','CarController@update')->name('Admin.cats.update');
Route::post('/cats/store','CarController@store')->name('Admin.cats.store');
Route::get('/cats/delete/{id}','CarController@destroy')->name('Admin.cats.delete');

  // times Routes
  Route::get('/times','TimeController@index')->name('Admin.times.index');
  Route::get('/times/create','TimeController@create')->name('Admin.times.create');
  Route::get('/times/edit/{id}','TimeController@edit')->name('Admin.times.edit');
  Route::post('/times/update','TimeController@update')->name('Admin.times.update');
  Route::post('/times/store','TimeController@store')->name('Admin.times.store');
  Route::get('/times/delete/{id}','TimeController@destroy')->name('Admin.times.delete');

// Cheef Routes
Route::get('/Cheefs','CheefController@index')->name('Admin.Cheefs.index');
Route::get('/Cheefs/create','CheefController@create')->name('Admin.Cheefs.create');
Route::get('/Cheefs/show/{id}','CheefController@show')->name('Admin.Cheefs.show');
Route::get('/Cheefs/edit/{id}','CheefController@edit')->name('Admin.Cheefs.edit');
Route::post('/Cheefs/update','CheefController@update')->name('Admin.Cheefs.update');
Route::post('/Cheefs/store','CheefController@store')->name('Admin.Cheefs.store');
Route::get('/Cheefs/delete/{id}','CheefController@destroy')->name('Admin.Cheefs.delete');


// Team Routes
Route::get('/Teams','TeamController@index')->name('Admin.Teams.index');
Route::get('/Teams/create','TeamController@create')->name('Admin.Teams.create');
Route::get('/Teams/show/{id}','TeamController@show')->name('Admin.Teams.show');
Route::get('/Teams/edit/{id}','TeamController@edit')->name('Admin.Teams.edit');
Route::post('/Teams/update','TeamController@update')->name('Admin.Teams.update');
Route::post('/Teams/store','TeamController@store')->name('Admin.Teams.store');
Route::get('/Teams/delete/{id}','TeamController@destroy')->name('Admin.Teams.delete');

// admin Routes
Route::get('/admins','adminController@index')->name('Admin.admins.index');
Route::get('/admins/create','adminController@create')->name('Admin.admins.create');
Route::get('/admins/show/{id}','adminController@show')->name('Admin.admins.show');
Route::get('/admins/edit/{id}','adminController@edit')->name('Admin.admins.edit');
Route::post('/admins/update','adminController@update')->name('Admin.admins.update');
Route::post('/admins/store','adminController@store')->name('Admin.admins.store');
Route::get('/admins/delete/{id}','adminController@destroy')->name('Admin.admins.delete');


// Meal Routes
Route::get('/Meals','MealController@index')->name('Admin.Meals.index');
Route::get('/Meals/create','MealController@create')->name('Admin.Meals.create');
Route::get('/Meals/show/{id}','MealController@show')->name('Admin.Meals.show');
Route::get('/Meals/edit/{id}','MealController@edit')->name('Admin.Meals.edit');
Route::post('/Meals/update','MealController@update')->name('Admin.Meals.update');
Route::post('/Meals/store','MealController@store')->name('Admin.Meals.store');
Route::get('/Meals/delete/{id}','MealController@destroy')->name('Admin.Meals.delete');

// Reservations Routes
Route::get('/Reservations','orderController@index')->name('Admin.Reservations.index');
Route::get('/Reservations/create','orderController@create')->name('Admin.Reservations.create');
Route::get('/Reservations/show/{id}','orderController@show')->name('Admin.Reservations.show');
Route::get('/Reservations/edit/{id}','orderController@edit')->name('Admin.Reservations.edit');
Route::post('/Reservations/update','orderController@update')->name('Admin.Reservations.update');
Route::post('/Reservations/store','orderController@store')->name('Admin.Reservations.store');
Route::get('/Reservations/delete/{id}','orderController@destroy')->name('Admin.Reservations.delete');

});

Route::get('/','FrontController@index')->name('Front.index');
Route::get('/contact-Us','FrontController@contact')->name('Front.contact');
Route::get('/teams','FrontController@teams')->name('Front.teams');
Route::get('/menus','FrontController@menus')->name('Front.menu');
Route::get('/cheefs','FrontController@cheefs')->name('Front.cheefs');
Route::get('/about-us','FrontController@about')->name('Front.about');
Route::post('/store','FrontController@store')->name('Front.store');

// Route::get('/', function () {
//     return view('Front.index');
// });


Auth::routes();

