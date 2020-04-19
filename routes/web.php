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
    return view('pages.index');
})->name('home');

Route::get('articles/tous-les-articles/{categorie}', 'ArticleController@getArticleByCat')->name('article_by_cat');


Route::get('formation', 'PagesController@getFormation')->name('formation');


Route::get('experience', 'PagesController@getExperience')->name('experience');
Route::get('competences', 'PagesController@getCompetences')->name('competences');
Route::get('loisirs', 'PagesController@getLoisir')->name('loisirs');
Route::get('contact', 'PagesController@getContact')->name('contact');
Route::post('contact', 'MessageController@store')->name('send-message');


Auth::routes();


Route::get('dashboard', 'AdminController@index')->name('dashboard');


Route::get('tous-les-articles', 'ArticleController@blogArticle')->name('tous-les-articles');


Route::resources(['categorie'=> 'CategoryController', 'articles'=>'ArticleController', 'commentaire'=>'CommentController', 'galerie'=>'GalleryController']);

Route::get('toutes-les-categories', 'CategoryController@dataAjax')->name('getCategories');

