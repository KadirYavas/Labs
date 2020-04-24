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

Route::get('/BDD-Form', 'FormulaireController@index')->name('bddForm');
Route::post('/messageSend', 'FormulaireController@store')->name('email');

Route::get('/BDD-News', 'NewsletterController@index')->name('bddNews');
Route::post('/newsSend', 'NewsletterController@store')->name('news');

Route::get('/BDD-Categorie', 'CategorieController@index')->name('CategorieBDD');
Route::get('/CreateCategorie', 'CategorieController@create')->name('addCategorie');
Route::post('/StoreCategorie', 'CategorieController@store')->name('envoiCategorie');
Route::get('/EditCategorie/{id}', 'CategorieController@edit')->name('editCategorie');
Route::post('/UpdateCategorie/{id}', 'CategorieController@update')->name('updateCategorie');
Route::get('/DestroyCategorie/{id}', 'CategorieController@destroy')->name('destroyCategorie');
Route::get('/ShowCategorie/{id}', 'CategorieController@show')->name('showCategorie');

Route::get('/BDD-Tag', 'TagController@index')->name('TagBDD');
Route::get('/CreateTag', 'TagController@create')->name('addTag');
Route::post('/StoreTag', 'TagController@store')->name('envoiTag');
Route::get('/EditTag/{id}', 'TagController@edit')->name('editTag');
Route::post('/UpdateTag/{id}', 'TagController@update')->name('updateTag');
Route::get('/DestroyTag/{id}', 'TagController@destroy')->name('destroyTag');
Route::get('/ShowTag/{id}', 'TagController@show')->name('showTag');

Route::get('/Service', 'ServiceController@index')->name('service');
Route::get('/BDD-Service', 'ServiceController@indexBDD')->name('ServiceBDD');
Route::get('/EnvoiService', 'ServiceController@create')->name('addService');
Route::post('/StoreService', 'ServiceController@store')->name('envoiService');
Route::get('/EditService/{id}', 'ServiceController@edit')->name('editService');
Route::post('/UpdateService/{id}', 'ServiceController@update')->name('updateService');
Route::get('/DestroyService/{id}', 'ServiceController@destroy')->name('destroyService');

Route::get('/Blog', 'ArticleController@index')->name('blog');
Route::get('/Blog-Post', 'ArticleController@indexDeux')->name('blog-post');
Route::get('/BDD-Blog', 'ArticleController@indexBDD')->name('BlogBDD');
Route::get('/BDD-Valide', 'ArticleController@indexBDDValide')->name('BlogBDDValide');
Route::get('/AddArticle', 'ArticleController@create')->name('ajoutArticle');
Route::post('/StoreArticle', 'ArticleController@store')->name('envoiArticle');
Route::get('/EditArticle/{id}', 'ArticleController@edit')->name('editArticle');
Route::post('/UpdateArticle/{id}', 'ArticleController@update')->name('updateArticle');
Route::get('/DestroyArticle/{id}', 'ArticleController@destroy')->name('destroyArticle');
Route::get('/ShowArticle/{id}', 'ArticleController@show')->name('showArticle');
Route::get('/SearchWord', 'ArticleController@search')->name('search');

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

Route::get('/BDD-Footer', 'FooterController@index')->name('bddFooter');
Route::get('/EditFooter/{id}', 'FooterController@edit')->name('editFooter');
Route::post('/UpdateFooter/{id}', 'FooterController@update')->name('updateFooter');

Route::get('/BDD-Testimonial', 'TestimonialController@index')->name('bddTestimonial');
Route::get('/EnvoiTestimonial', 'TestimonialController@create')->name('addTestimonial');
Route::post('/StoreTestimonial', 'TestimonialController@store')->name('envoiTestimonial');
Route::get('/EditTestimonial/{id}', 'TestimonialController@edit')->name('editTestimonial');
Route::post('/UpdateTestimonial/{id}', 'TestimonialController@update')->name('updateTestimonial');
Route::get('/DestroyTestimonial/{id}', 'TestimonialController@destroy')->name('destroyTestimonial');

Route::get('BDD-Users', 'UserController@index')->name('bddUser');
Route::get('/EditUser/{id}', 'UserController@edit')->name('editUser');
Route::post('/UpdateUser/{id}', 'UserController@update')->name('updateUser');

Route::get('BDD-Commentaire', 'CommentaireController@index')->name('CommentaireBDD');
Route::post('/StoreCommentaire', 'CommentaireController@store')->name('sendCommentaire');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
