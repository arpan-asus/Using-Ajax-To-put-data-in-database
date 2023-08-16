<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/tasks', TaskController::class);
Route::get('/test',function()
{
    return view('hello');
});

Route::get('/form', [TaskController::class, 'getForm'])->name('getForm');
Route::post('/form', [TaskController::class, 'getstore'])->name('getstore');
Route::get('/ajax/fetch', [TaskController::class, 'ajaxfetchData'])->name('ajaxfetch');//response
Route::get('/fetchajax', [TaskController::class, 'fetchajax'])->name('fetchajaxData');//view

