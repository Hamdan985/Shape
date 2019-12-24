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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registration', 'Auth\UserRegisterController@index')->name('registration');
Route::get('/signin', 'Auth\UserLoginController@index')->name('signin');
Route::post('/registration', 'Auth\UserRegisterController@store');
Route::post('/signin', 'Auth\UserLoginController@login');

Route::resource('trainers','TrainerController');
Route::resource('gyms','GymController');
Route::resource('customers','CustomerController');

Route::get('/basic', function () {
    return view('layouts.dash.basic-table');
});

Route::get('/blank', function () {
    return view('layouts.dash.blank');
});

Route::get('/dashboar', function () {
    return view('layouts.dash.dashboard');
});

Route::get('/fontawesome', function () {
    return view('layouts.dash.fontawesome');
});

Route::get('/profile', function () {
    return view('layouts.dash.profile');
});

//Trainers


Route::get('/tprofile','TrainerController@trainer_profile');
