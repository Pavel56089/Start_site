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


Route::get('aboutus', function () {
    return view('about-content');
});

//По видеоуроку
Route::get('contact',[
    'uses'=> 'ContactMessageController@create'
]);
Route::post('contact',[
    'uses' => 'ContactMessageController@store',
    'as' => 'contact.store'
]);

Route::get('events', 'EventController@eventspage');


Route::get('article/{id}', 'IndexController@show')->name('articleShow');
Route::get('event/{id}', 'EventController@show')->name('eventShow');
Route::auth();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
