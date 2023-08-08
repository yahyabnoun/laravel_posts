<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/posts/{id}/{category?}', [HomeController::class,'show'])->name('posts.show');
Route::get('/paginition/{postsnum}', [HomeController::class,'paginition'])->name('posts.paginition');


//////////////// admin //////////////////

Route::middleware(['adminauth','prevent-back-history'])->group(function ()
{
    
    Route::get('/admin/dashbord/{search?}', [AdminController::class,'dashbord'])->name('admin.dashbord');
    Route::get('/admin/ajouter_post', [AdminController::class,'create'])->name('admin.ajouter_post');
    Route::get('/admin/store', [AdminController::class,'store'])->name('admin.store');
    
    Route::get('/admin/edit/{id}', [AdminController::class,'edit'])->name('admin.edit');
    Route::put('/admin/update/{id}', [AdminController::class,'update'])->name('admin.update');
    
    Route::post('/admin/store_post', [AdminController::class,'store'])->name('store_post');
    Route::delete('/admin/delete/{id}', [AdminController::class,'delete'])->name('admin.delete');
    Route::get('/admin/test/test', [AdminController::class,'test']) ;
    
    
    
    
});
Route::get('/admin/login', [AdminController::class,'viewlogin'])->name('admin.login');
Route::post('/admin/login/action', [AdminController::class,'actionlogin'])->name('admin.loginaction');
Route::get('/admin/login/actiongout', [AdminController::class,'actionlogout'])->name('admin.actionlogout');

 
