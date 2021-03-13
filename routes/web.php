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
    return view('template.blog.index');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){


route::get('/categories', [
    'uses' => 'App\Http\Controllers\CategoryController@index',
    'as' => 'categories'
]);

Route::get('/category/create', [
    'uses' => 'App\Http\Controllers\CategoryController@create',
    'as' => 'category.create'
]);

Route::post('/category/store', [
    'uses' => 'App\Http\Controllers\CategoryController@store',
    'as' => 'category.store'
]);

Route::get('/category/edit/{id}', [
    'uses' => 'App\Http\Controllers\CategoryController@edit',
    'as' => 'category.edit'
]);

Route::post('/category/update{id}', [
    'uses' => 'App\Http\Controllers\CategoryController@update',
    'as' => 'category.update'
]);

Route::get('/category/delete/{id}', [
    'uses' => 'App\Http\Controllers\CategoryController@delete',
    'as' => 'category.delete'
]);

route::get('/posts', [
    'uses' => 'App\Http\Controllers\Postcontroller@index',
    'as' => 'posts'
]);

Route::get('/post/create', [
    'uses' => 'App\Http\Controllers\PostController@create',
    'as' => 'post.create'
]);

Route::post('/post/store', [
    'uses' => 'App\Http\Controllers\PostController@store',
    'as' => 'post.store'
]);

Route::get('/post/edit/{id}', [
    'uses' => 'App\Http\Controllers\PostController@edit',
    'as' => 'post.edit'
]);

Route::post('/post/update{id}', [
    'uses' => 'App\Http\Controllers\PostController@update',
    'as' => 'post.update'
]);

Route::get('/post/trash/{id}', [
    'uses' => 'App\Http\Controllers\PostController@trash',
    'as' => 'post.trash'
]);

Route::get('/post/trashed', [
    'uses' => 'App\Http\Controllers\PostController@trashed',
    'as' => 'post.trashed'
]);

Route::get('/post/restore{id}', [
    'uses' => 'App\Http\Controllers\PostController@restore',
    'as' => 'post.restore'
]);

Route::get('/post/delete{id}', [
    'uses' => 'App\Http\Controllers\PostController@delete',
    'as' => 'post.delete'
]);


route::get('/tags', [
    'uses' => 'App\Http\Controllers\TagsController@index',
    'as' => 'tags'
]);

Route::get('/tag/create', [
    'uses' => 'App\Http\Controllers\TagsController@create',
    'as' => 'tag.create'
]);

Route::post('/tag/store', [
    'uses' => 'App\Http\Controllers\TagsController@store',
    'as' => 'tag.store'
]);

Route::get('/tag/edit/{id}', [
    'uses' => 'App\Http\Controllers\TagsController@edit',
    'as' => 'tag.edit'
]);

Route::post('/tag/update{id}', [
    'uses' => 'App\Http\Controllers\TagsController@update',
    'as' => 'tag.update'
]);

Route::get('/tag/delete/{id}', [
    'uses' => 'App\Http\Controllers\TagsController@delete',
    'as' => 'tag.delete'
]);

route::get('/blog', [
    'uses' => 'App\Http\Controllers\BlogController@index',
    'as' => 'blog'
]);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
