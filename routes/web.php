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

Route::get('/', function () {
    return view('starting_page');
});

Route::get('/info', function () {
    return view('info');
});



Route::resource('hobby', 'HobbyController');

Route::resource('tag', 'TagController');

Route::resource('user', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hobby/tag/{tag_id}', 'HobbyTagController@getFilteredHobbies')->name('hobby_tag');
Route::get('/hobby/{hobby_id}/tag/{tag_id}/attach', 'HobbyTagController@attachTag');
Route::get('/hobby/{hobby_id}/tag/{tag_id}/detach', 'HobbyTagController@detachTag');
