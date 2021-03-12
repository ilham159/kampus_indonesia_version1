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
    return view('welcome');
});

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

Route::post('/category/update{id', [
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

Route::post('/post/update{id', [
    'uses' => 'App\Http\Controllers\PostController@update',
    'as' => 'post.update'
]);

Route::get('/post/delete/{id}', [
    'uses' => 'App\Http\Controllers\PostController@delete',
    'as' => 'post.delete'
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
