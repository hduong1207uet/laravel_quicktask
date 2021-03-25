<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController; 

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
Route::redirect('/', '/posts', 301)->name('home');

Route::get('/posts/show-message/{id}', 'PostController@showMessage')->name('posts.show_message');

Route::get('lang/{lang}','LangController@changeLang')->name('lang');

Route::resources([
    'posts' => 'PostController',
    'comments' => 'CommentController',
]);
