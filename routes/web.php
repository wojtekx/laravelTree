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
Auth::routes();

Route::get('/', function () {
    $categories = \App\Tree::where('parent_id', 0)->get();
    return view('tree.index', compact('categories'));
});
Route::resource('contacts', 'ContactController');
Route::resource('tree', 'TreeController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('test', function(){
    return App\Tree::with('childs')
    ->where('parent_id',0)
    ->get();
});

Route::get('tree', function() {
    $categories = \App\Tree::where('parent_id', 0)->get();
    return view('tree.index', compact('categories'));
});




