<?php

use App\Http\Controllers\PostController;
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
//Route::redirect('URI','URI',301);browser mhr a shae ka URI ko yayy yin a nout ka URI ko a lote lok ml ae lo pone san myoe.
Route::redirect('/','customer/createPage')->name('post#home');

// Route::get('/', [PostController::class, 'create'])->name('post#home');

Route::get('customer/createPage', [PostController::class, 'create'])->name('post#createPage');

Route::post('post/create', [PostController::class, 'postCreate'])->name('post#create');

Route::get('testing', function () {
    return "this is testing...";
})->name('test');

Route::get('post/delete/{id}', [PostController::class,'postDelete'])->name('post#delete');

// Route::delete('post/delete/{id}', [PostController::class, 'postDelete'])->name('post#delete');

Route::get('post/updatePage/{id}', [PostController::class, 'updatePage'])->name('post#updatePage');

Route::get('post/editPage/{id}', [PostController::class, 'editPage'])->name('post#editPage');

Route::post('post/update', [PostController::class, 'update'])->name('post#update');
