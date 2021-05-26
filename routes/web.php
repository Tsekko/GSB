<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PraticienController;
use App\Http\Controllers\UserController;

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

Route::get('/', function(){
    return view("accueil");
});

Route::get('/praticien', [PraticienController::class, 'liste']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', [UserController::class, 'getProfile']);



require __DIR__.'/auth.php';
