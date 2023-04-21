<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KependudukanController;

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
    return view('welcome');
});


 
Route::get('/index', [KependudukanController::class, 'show']);

Route::get('/insert', [KependudukanController::class, 'insert']);

Route::post('/index/store', [KependudukanController::class, 'save']);

Route::get('/index/edit/{nik}', [KependudukanController::class, 'edit']);

Route::post('/index/ubah', [KependudukanController::class, 'ubah']);

Route::get('/delete/{nik}', [KependudukanController::class, 'delete']);

Route::get('index/print_pdf', [KependudukanController::class, 'print_pdf']);

Route::get('index/export_excel', [KependudukanController::class, 'export_excel']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
