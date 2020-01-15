<?php
Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/hod', 'Auth\LoginController@showHodLoginForm');
Route::get('/login/student', 'Auth\LoginController@showStudentLoginForm');
Route::get('/register/hod', 'Auth\RegisterController@showHodRegisterForm');
Route::get('/register/student', 'Auth\RegisterController@showStudentRegisterForm');

Route::post('/login/hod', 'Auth\LoginController@hodLogin');
Route::post('/login/student', 'Auth\LoginController@studentLogin');
Route::post('/register/hod', 'Auth\RegisterController@createHod');
Route::post('/register/student', 'Auth\RegisterController@createStudent');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'hod');
Route::view('/writer', 'student');

Route::resource('/student', 'StudentController');
