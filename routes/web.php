<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about.index');
Route::post('/about', [HomeController::class, 'send_email'])->name('about.send');

//Portfolio

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/project/1', [PortfolioController::class, 'project_advoce'])->name('portfolio.project_advoce');
Route::get('/portfolio/project/2', [PortfolioController::class, 'project_protsa'])->name('portfolio.project_protsa');
Route::get('/portfolio/project/3', [PortfolioController::class, 'project_blog'])->name('portfolio.project_blog');


//Blog

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/categorie{categorie}', [blogController::class, 'list_categorie'])->name('blog.categorie');
Route::get('/blog/post/1', [blogController::class, 'post_1'])->name('blog.post');
