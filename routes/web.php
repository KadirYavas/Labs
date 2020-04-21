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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/Service', 'ServiceController@index')->name('service');
Route::get('/BDD-Service', 'ServiceController@indexBDD')->name('ServiceBDD');
Route::get('/EnvoiService', 'ServiceController@create')->name('createService');
Route::post('/StoreService', 'ServiceController@store')->name('envoiService');
Route::get('/EditService/{id}', 'ServiceController@edit')->name('editService');
Route::post('/UpdateService/{id}', 'ServiceController@update')->name('updateService');
Route::get('/DestroyService/{id}', 'ServiceController@destroy')->name('destroyService');

Route::get('/Blog', 'ArticleController@index')->name('blog');
Route::get('/Blog-Post', 'ArticleController@indexDeux')->name('blog-post');

Route::get('/Contact', 'ContactController@index')->name('contact');

Route::get('/BDD-Header', 'HeaderController@index')->name('bddHeader');
Route::get('/EditLogoHeader/{id}', 'HeaderController@edit')->name('editLogoHeader');
Route::post('/UpdateLogoHeader/{id}', 'HeaderController@update')->name('updateLogoHeader');
Route::get('/EditNav/{id}', 'HeaderController@editNav')->name('editNav');
Route::post('/UpdateNav/{id}', 'HeaderController@updateNav')->name('updateNav');
Route::get('/EditCarousel/{id}', 'HeaderController@editCarousel')->name('editCarousel');
Route::post('/UpdateCarousel/{id}', 'HeaderController@updateCarousel')->name('updateCarousel');
Route::get('/EditTexte/{id}', 'HeaderController@editTexte')->name('editTexte');
Route::post('/UpdateTexte/{id}', 'HeaderController@updateTexte')->name('updateTexte');










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
