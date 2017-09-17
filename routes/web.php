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

//    flash('Welcome Aboard!');
//    dd(session()->all());
    return view('welcome');
});


Route::get('/Exception', function () {
//    1er method
    throw_if(true, Exception::class, "this is exception example");
//    2em method
    throw_if(true, new Exception("this is exception example"));

});

Route::get('/mail', function () {


    return new App\Mail\mail;
});


Route::resource('post', 'PostController');


//Routing helper
Route::view('/welcome','welcome',['username'=>'test']);

//Redirect
Route::redirect('/hello','/welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
