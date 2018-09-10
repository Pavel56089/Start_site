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

Route::get('/', 'IndexController@index');

Route::get('/posts', 'IndexController@posts');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('aboutus', function () {
    return view('about-content');
});


Route::get('contact',[
    'uses'=> 'ContactMessageController@create'
]);
Route::post('contact',[
    'uses' => 'ContactMessageController@store',
    'as' => 'contact.store'
]);

Route::get('events', 'EventController@eventspage');


Route::get('/{slug}', 'IndexController@show')->name('articleShow');//Для страницы 404 и постов
Route::get('event/{id}', 'EventController@show')->name('eventShow');
Route::auth();



