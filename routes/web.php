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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home_sr', function(){
    return view('home_sr');
});

Route::get('/home_sr', 'PageOneController@articlesPageOne');

Route::get('/simplonFrance', function() {
    return view('simplonFrance');
});

Route::get('/simplonFrance', 'PageTwoController@articlesPageTwo');

Route::get('/descriptionSimplon', function() {
    return view('descriptionSimplon');
});

Route::get('/descriptionSimplon', 'PageThreeController@articlesPageThree');

Route::get('/list_project', function () {
    return view('list_project');
});

Route::get('/descriptiveProject', function(){
    return view('descriptiveProject');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('about', function () {
    return view('about');
})->middleware('backoffice::class');

Route::get('/home_bo', function () {
    return view('home_bo');
});

Route::get('/page1_bo', function () {
    return view('page1_bo');
});

Route::get('/page2_bo', function () {
    return view('page2_bo');
});

Route::get('/page3_bo', function () {
    return view('page3_bo');
});

Route::get('/page4_bo', function () {
    return view('page4_bo');
});




