<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\DataUserController;

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

Route::get('/home', function () {
    return view('main');
})->middleware('auth');

// auth login register Routes
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/confirmlogin', [LoginController::class, 'confirmlogin'])->name(
    'confirmlogin'
);

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('registeruser', [LoginController::class, 'registeruser'])->name(
    'registeruser'
);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Data user routes
Route::get('/datauser', [DataUserController::class, 'index'])
    ->name('datauser')
    ->middleware('auth');
Route::get('/adduser', [DataUserController::class, 'adduser'])
    ->name('adduser')
    ->middleware('auth');
Route::post('/insertdatauser', [DataUserController::class, 'insertdatauser']);
Route::get('showdatauser/{id}', [DataUserController::class, 'showdatauser']);
Route::post('/updatedatauser/{id}', [
    DataUserController::class,
    'updatedatauser',
]);
Route::get('/deletedatauser/{id}', [
    DataUserController::class,
    'deletedatauser',
]);

// Surat Masuk Routes
Route::get('/suratmasuk', [SuratMasukController::class, 'index'])
    ->name('suratmasuk')
    ->middleware('auth');
