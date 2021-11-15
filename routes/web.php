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

Route::get('/',['App\Http\Controllers\FrontController','index'])->name('homepage');
Route::get('/article/{slug}',['App\Http\Controllers\FrontController','single'])->name('article.single');
Route::get('/about',['App\Http\Controllers\FrontController','about'])->name('about');
Route::get('/contact',['App\Http\Controllers\FrontController','contact'])->name('contact');
Route::post('/contact',['App\Http\Controllers\FrontController','send'])->name('contact.send');
Route::get('/admin/login',['App\Http\Controllers\Back\LoginController','index'])->name('login.index');
Route::post('/admin/login',['App\Http\Controllers\Back\LoginController','login'])->name('login.check');

Route::prefix('admin')->middleware('isAdmin')->name('admin.')->group(function (){
    Route::get('/dashboard',['App\Http\Controllers\Back\DashboardController','index'])->name('dashboard');
    Route::resource('/article','App\Http\Controllers\Back\ArticleController');
    Route::get('/article/switch/{id}',['App\Http\Controllers\Back\ArticleController','switch'])->name('article.switch');
    Route::resource('/category','App\Http\Controllers\Back\CategoryController');
    Route::get('/category/switch/{id}',['App\Http\Controllers\Back\CategoryController','switch'])->name('category.switch');
    Route::get('/siteconfig',['App\Http\Controllers\Back\SiteConfigController','index'])->name('config.index');
    Route::post('/siteconfig',['App\Http\Controllers\Back\SiteConfigController','update'])->name('config.update');
    Route::get('/contact',['App\Http\Controllers\Back\ContactController','index'])->name('contact.index');
    Route::post('/contact',['App\Http\Controllers\Back\ContactController','send'])->name('contact.send');
    Route::get('/logout',['App\Http\Controllers\Back\LoginController','logout'])->name('logout');
});


