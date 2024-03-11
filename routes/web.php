<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\Auth\UpdateprofileController;
use App\Http\Controllers\ArticleController;
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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);
Auth::routes();

Route::get('/updateprofile', [UpdateprofileController::class,'update'])->name('update');
Route::post('/updateprofiledata',[UpdateprofileController::class,'UpdateProfile'])->name('updateprofiledata');
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::Post('/storearticle',[ArticalController::class,'store'])->name('storearticle');
Route::get('/blog/createarticle',function(){
    return view('createarticle');
})->name('addarticle');


