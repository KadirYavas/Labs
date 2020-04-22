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

Route::post('/messageSend', 'FormulaireController@store')->name('email');

Route::get('/Service', 'ServiceController@index')->name('service');
Route::get('/BDD-Service', 'ServiceController@indexBDD')->name('ServiceBDD');
Route::get('/EnvoiService', 'ServiceController@create')->name('addService');
Route::post('/StoreService', 'ServiceController@store')->name('envoiService');
Route::get('/EditService/{id}', 'ServiceController@edit')->name('editService');
Route::post('/UpdateService/{id}', 'ServiceController@update')->name('updateService');
Route::get('/DestroyService/{id}', 'ServiceController@destroy')->name('destroyService');

Route::get('/Blog', 'ArticleController@index')->name('blog');
Route::get('/Blog-Post', 'ArticleController@indexDeux')->name('blog-post');

Route::get('/Contact', 'ContactController@index')->name('contact');
Route::get('/BDD-Contact', 'ContactController@create')->name('ContactBDD');
Route::get('/EditContact/{id}', 'ContactController@edit')->name('editContact');
Route::post('/UpdateContact/{id}', 'ContactController@update')->name('updateContact');

Route::get('/BDD-Header', 'HeaderController@index')->name('bddHeader');
Route::get('/EditLogoHeader/{id}', 'HeaderController@edit')->name('editLogoHeader');
Route::post('/UpdateLogoHeader/{id}', 'HeaderController@update')->name('updateLogoHeader');
Route::get('/EditNav/{id}', 'HeaderController@editNav')->name('editNav');
Route::post('/UpdateNav/{id}', 'HeaderController@updateNav')->name('updateNav');
Route::get('/EditTexte/{id}', 'HeaderController@editTexte')->name('editTexte');
Route::post('/UpdateTexte/{id}', 'HeaderController@updateTexte')->name('updateTexte');

Route::get('/EnvoiCarousel', 'HeaderController@create')->name('addCarousel');
Route::post('/StoreCarousel', 'HeaderController@store')->name('envoiCarousel');
Route::get('/EditCarousel/{id}', 'HeaderController@editCarousel')->name('editCarousel');
Route::post('/UpdateCarousel/{id}', 'HeaderController@updateCarousel')->name('updateCarousel');
Route::get('/DestroyCarousel/{id}', 'HeaderController@destroy')->name('destroyCarousel');

Route::get('/BDD-Discover', 'DiscoverController@index')->name('bddDiscover');
Route::get('/EditTexteVideo/{id}', 'DiscoverController@editTexteVideo')->name('editTexteVideo');
Route::post('/UpdateTexteVideo/{id}', 'DiscoverController@updateTexteVideo')->name('updateTexteVideo');

Route::get('/BDD-Titre', 'TitreController@index')->name('bddTitre');
Route::get('/EditTitre/{id}', 'TitreController@edit')->name('editTitre');
Route::post('/UpdateTitre/{id}', 'TitreController@update')->name('updateTitre');

Route::get('/BDD-Ready', 'ReadiesController@index')->name('bddReadies');
Route::get('/EditReady/{id}', 'ReadiesController@edit')->name('editReadies');
Route::post('/UpdateReady/{id}', 'ReadiesController@update')->name('updateReadies');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
