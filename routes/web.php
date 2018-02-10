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
    return view('todo.index');
});
Route::get('/','ToDoController@index');
Route::post('/create','ToDoController@create')->name('create');
Route::get('/update/{id}','ToDoController@update')->name('update');
Route::get('/delete/{id}','ToDoController@delete')->name('delete');


/*Route::get('image-gallery', 'ImageGalleryController@index');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');
*/