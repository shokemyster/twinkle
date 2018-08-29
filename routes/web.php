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
use App\Post;

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/admin', function() {
  return view('admin.index');
})->middleware('admin');

Route::resource('/admin/pages','Admin\PagesController');

Route::resource('/admin/blog','Admin\BlogController');

Route::get('/all', 'BlogPostController@index')->name('blog');
Route::post('/magical-filter', 'BlogPostController@search')->name('blog');
Route::get('/magical-filter', function(){
  return view('blog.magicalfilter');
});


Route::get('/item/{slug}', 'BlogPostController@view')->name('blog.view');

Route::get('/categories', 'BlogPostController@viewAllCategories');
Route::get('/category/{slug}', 'CategoryController@view');
/*Route::get('/categories', function(){
  return 'Yo';
});*/