<?php

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//User Authentication Routes
Route::get('/registration', 'Auth\UserRegisterController@index')->name('registration');
Route::get('/signin', 'Auth\UserLoginController@index')->name('signin');
Route::post('/registration', 'Auth\UserRegisterController@store');
Route::post('/signin', 'Auth\UserLoginController@login');


//Gyms Routes
Route::prefix('gyms')->group(function () {
    Route::resource('/','GymController');
    Route::get('/profile','GymController@profile');
    Route::get('/trainers/{gid}','GymController@trainers');
    Route::get('/customers/{gid}','GymController@customers');
    Route::get('/trainers/{tid}/edit','GymController@editTrainer');
    Route::get('/customers/{tid}/edit','GymController@editCustomer');
    Route::get('/addnew','GymController@addnew');
});


//Membership Routes
Route::resource('/membership','MembershipController');


//Customers Routes
Route::prefix('customers')->group(function () {
    Route::resource('/','CustomerController');
    Route::get('/profile','CustomerController@profile');
    Route::get('/bookgym/{gid}','CustomerController@bookgym');
    Route::resource('admission','AdmissionController');
});
Route::get('/findgyms','CustomerController@findgyms');


//Trainers Routes
Route::prefix('trainers')->group(function (){
    Route::resource('/','TrainerController');
    Route::get('/profile','TrainerController@profile');
});


//AmpleAdmin Routes
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

