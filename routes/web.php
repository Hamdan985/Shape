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


//Trainers Routes
Route::resource('trainers','TrainerController');
Route::get('/tprofile','TrainerController@profile');


//Gyms Routes
Route::resource('gyms','GymController');
Route::get('/gprofile','GymController@profile');
Route::get('/gtrainers/{gid}','GymController@trainers');
Route::get('/gcustomers/{gid}','GymController@customers');
Route::get('/gtrainers/{tid}/edit','GymController@editTrainer');
Route::get('/gcustomers/{tid}/edit','GymController@editCustomer');

//Membership Routes
Route::resource('/membership','MembershipController');

//Customers Routes
Route::resource('customers','CustomerController');
Route::get('/cprofile','CustomerController@profile');
Route::get('/findgyms','CustomerController@findgyms');
Route::get('/bookgym/{gid}','CustomerController@bookgym');
Route::resource('admission','AdmissionController');


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

