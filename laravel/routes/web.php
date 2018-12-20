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
    return view('homepage');
})->name('home');

Route::get('/kip', function () {
    return view('kip');
})->name('kip');

Route::get('/hond', function () {
    return "KOULO HOND";
});

Route::get('/eekhoorn', function () {
    return "Lijp dikke Eekhoorn";
});

Route::post('/eekhoorn', function () {
    return "MOOIE EEKHOORN";
});

Route::get('/test', function(){
    $data =  array('Joe','Carl','Benny');
    return $data;
});

Route::get('/henk', function(){
return "hello world";
});

Route::get('/artikel/{nummer}', 'ArticleController@show')
    ->where('nummer', '\d+')
    ->name('artikel.opnummer')
    ;

Route::get('/artikel/{naam}', function($naam){
    return 'dit is url artikel' . $naam;
})
    ->where('naam', '([a-zA-Z\-])+')
    ->name('artikel.show_name')
    ;
Route::get('/test', 'TestController@test');


Route::get('/skaters', 'SkatersController@test');






















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//photo Galery
Route::get('/photo-gallery', 'PhotoGalleryController@listPhotos')
->name('gallery.index');
Route::get('/photo-gallery/add-photo', 'PhotoGalleryController@showPhotoForm')
    ->name('gallery.add_photo');
Route::post('/photo-gallery/add-photo', 'PhotoGalleryController@savePhotoForm')
    ->name('gallery.save_photo');
