<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/users', [UserController::class, 'index']);
//Route::get('/add-client', [UserController::class, 'createUser'])->name('add-user');
//
//Route::post('/save-user', [UserController::class, 'saveUser'])->name('save');
//Route::post('/add-row', [UserController::class, 'addRow'])->name('saved');
//Route::get('/edit-client/', [UserController::class, 'edit'])->name('edit');
//Route::get('/delete-client/', [UserController::class, 'destroy'])->name('delete');

Route::resource('users', UserController::class);

