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

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('liste','ListerController@showListe')->name('liste');

Route::get('nouvel-etudiant', 'ListerController@index')->name('nouvel-etudiant');

Route::post('enregistrer', 'ListerController@store')->name('save');

Route::resource('etudiant/etudiant', 'ListerController');

Route::post('supprimer/{etudiant}/destroy', 'ListerController@destroy');
// ->name('destroy');

Route::get('/pdf/{etudiant}', ['as' => 'etudiant.pdf', 'uses' => 'PDFController@generatePdf']);

Route::post('modifier/{etudiant}/update', 'ListerController@update');
// ->name('modifier');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('generate-pdf','PDFController@generatePDF');
Route::get('write-email','MailController@index')->name('email');

// Route::get('/write-email/{etudiant}', ['as' => 'etudiant.mail', 'uses' => 'MailController@index']);
Route::post('sendemail','MailController@sendemail');

