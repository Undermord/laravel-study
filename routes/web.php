<?php

use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return 'ssss';
});

// Группа маршрутов с пространством имен 'App\Http\Controllers\Post'
Route::group(['namespace'=>'App\Http\Controllers\Post'], function(){
    Route::get('/posts', 'IndexController' )->name('post.index');
    Route::get('/posts/create', 'CreateController')->name('post.create');
    Route::post('/posts', 'StoreController')->name('post.store');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('post.destroy');
});

// Маршруты, которые не входят в группу с пространством имен
Route::get('/posts/update', [PostController::class, 'update'])->name('post.update');
Route::get('/posts/delete', [PostController::class, 'delete'])->name('post.delete');
Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate'])->name('post.first_or_create');
Route::get('/posts/update_or_create', [PostController::class, 'updateOrCreate'])->name('post.update_or_create');

Route::get('/main', [\App\Http\Controllers\MainController::class, 'index'])->name('main.index');
Route::get('/contacts', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
