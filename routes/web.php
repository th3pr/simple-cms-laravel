<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MyinfoController;
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

// 1st day task
//  Home Page
Route::get('/', [MainController::class,'mainPage']);

// Return myinfo page
// Route::get('/myinfo', [MyinfoController::class ,'viewPage']);

// Return capitalized parameters
// Route::get('/myinfo/{key}', [MyinfoController::class, 'parameterReturn']);

// Return Parameters
// Route::get('req', [MyinfoController::class, "returnPara"]);

// 2nd day task
// Blogs
// Route::get('blog', [BlogController::class, 'myblogs']);

// Single Blog
// Route::get('single/{single}', [BlogController::class, 'singleBlog']);


// 3rd Day Task
Route::get('blog', [BlogController::class,'index'])->name('blog.index');
Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('blog/create', [BlogController::class, 'save'])->name('blog.create.save');
Route::get('blog/{id}', [BlogController::class, 'view'])->name('blog.view');
Route::get('blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('blog/{id}/edit', [BlogController::class, 'update'])->name('blog.update');
Route::get('blog/{id}/delete', [BlogController::class, 'delete'])->name('blog.delete');

