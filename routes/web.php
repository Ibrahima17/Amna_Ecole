<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailController;
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
route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth', 'verified');
route::get('/about', [HomeController::class, 'about']);
route::get('/filiere', [HomeController::class, 'filiere']);
route::get('/filiere_single/{id}', [HomeController::class, 'filiere_single']);
route::get('/ecoles', [HomeController::class, 'ecoles']);
route::get('/ecoles_single/{id}', [HomeController::class, 'ecoles_single']);
route::get('/userpage', [HomeController::class, 'userpage']);
route::get('/search_all', [HomeController::class, 'search_all']);

route::get('/view_filiere', [AdminController::class, 'view_filiere']);
route::post('/add_filiere', [AdminController::class, 'add_filiere']);
route::get('/show_filiere', [AdminController::class, 'show_filiere']);
route::get('/delete_filiere/{id}', [AdminController::class, 'delete_filiere']);
route::get('/update_filiere/{id}', [AdminController::class, 'update_filiere']);
route::post('/update_filiere_confirm/{id}', [AdminController::class, 'update_filiere_confirm']);

route::get('/view_ecole', [AdminController::class, 'view_ecole']);
route::post('/add_ecole', [AdminController::class, 'add_ecole']);
route::get('/show_ecole', [AdminController::class, 'show_ecole']);
route::get('/delete_ecole/{id}', [AdminController::class, 'delete_ecole']);
route::get('/update_ecole/{id}', [AdminController::class, 'update_ecole']);
route::post('/update_ecole_confirm/{id}', [AdminController::class, 'update_ecole_confirm']);

route::get('/search', [AdminController::class, 'searchdata']);
Route::get('/email', [HomeController::class, 'create']);
Route::post('/email', [HomeController::class, 'sendEmail'])->name('send.email');
require __DIR__.'/auth.php';
