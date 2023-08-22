<?php

use App\Http\Controllers\EmployeeController;
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
//Routes for PostCRUD
Route::get('/', [PostController::class, 'create'])->name('post#home');
Route::get('customer/createPage', [PostController::class, 'create'])->name('post#createPage');
Route::post('post/create', [PostController::class, 'postCreate'])->name('post#create');
Route::get('testing', function () {
    return "this is testing...";
})->name('test');
// Route::get('post/delete/{id}', [PostController::class,'postDelete'])->name('post#delete');
Route::delete('post/delete/{id}', [PostController::class, 'postDelete'])->name('post#delete');
Route::get('post/updatePage/{id}', [PostController::class, 'updatePage'])->name('post#updatePage');
Route::get('post/editPage/{id}', [PostController::class, 'editPage'])->name('post#editPage');
Route::post('post/update', [PostController::class, 'update'])->name('post#update');

//Routes for EmployeeCRUD
Route::get('/', [EmployeeController::class, 'create'])->name('employee#home');
Route::get('employee/createPage', [EmployeeController::class, 'create'])->name('employee#createPage');
Route::post('employee/create', [EmployeeController::class, 'employeeCreate'])->name('employee#create');
Route::get('employee/delete/{id}', [EmployeeController::class, 'employeeDelete'])->name('employee#delete');
Route::get('employee/updatePage/{id}', [EmployeeController::class, 'updatePage'])->name('employee#updatePage');
Route::get('employee/editPage/{id}', [EmployeeController::class, 'editPage'])->name('employee#editPage');
Route::post('employee/update', [EmployeeController::class, 'update'])->name('employee#update');
