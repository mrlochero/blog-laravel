<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeBlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;

use App\Models\Post;

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

// Blog

Route::get('/', [HomeBlogController::class, 'index']);
Route::get('/posts', [PostsController::class, 'index']);

// Category
// Route::prefix('/category')
//     ->name('category.')
//     ->group(function () {
//         Route::get('/{id}', [CategoryController::class, 'index'])->name(
//             'index'
//         );
//         Route::get('/blog', [CategoryController::class, 'blog'])->name('blog');
//         Route::get('/laravel', [CategoryController::class, 'laravel'])->name(
//             'laravel'
//         );
//         Route::get('/php', [CategoryController::class, 'php'])->name('php');
//         Route::get('/html', [CategoryController::class, 'html'])->name('html');
//         Route::get('/css', [CategoryController::class, 'css'])->name('css');
//     });

// Post
Route::prefix('/post')
    ->name('post.')
    ->group(function () {
        Route::get('/{id}', [PostController::class, 'show'])->name('show');
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/add', [PostController::class, 'add'])->name('add');
        Route::post('/add', [PostController::class, 'postAdd'])->name(
            'post-add'
        );
        Route::get('/edit{id}', [PostController::class, 'edit'])->name('edit');
        Route::post('/update', [PostController::class, 'postEdit'])->name(
            'post-edit'
        );
        Route::get('/delete{id}', [PostController::class, 'deleteData'])->name(
            'delete'
        );
    });

// Admin

Route::prefix('/admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('index');
        Route::get('/createPost', [AdminController::class, 'createPost'])->name(
            'createPost'
        );
        Route::get('/showListPost', [
            AdminController::class,
            'showListPost',
        ])->name('showListPost');
    });
