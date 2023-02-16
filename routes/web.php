<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\CreateLetterController;
use App\Http\Controllers\PDFController;

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
Route::get('/addsuratmasuk', [SuratMasukController::class, 'addsuratmasuk'])
    ->name('addsuratmasuk')
    ->middleware('auth');
Route::get('/addsuratmasuk', [SuratMasukController::class, 'addsuratmasuk'])
    ->name('addsuratmasuk')
    ->middleware('auth');
Route::post('/insertsuratmasuk', [
    SuratMasukController::class,
    'insertsuratmasuk',
]);
Route::get('showsuratmasuk/{id}', [
    SuratMasukController::class,
    'showsuratmasuk',
]);
Route::post('/updatesuratmasuk/{id}', [
    SuratMasukController::class,
    'updatesuratmasuk',
]);
Route::get('/deletesuratmasuk/{id}', [
    SuratMasukController::class,
    'deletesuratmasuk',
]);

// Surat Keluar Routes
Route::get('/suratkeluar', [SuratKeluarController::class, 'index'])
    ->name('suratkeluar')
    ->middleware('auth');
Route::get('/addsuratkeluar', [SuratKeluarController::class, 'addsuratkeluar'])
    ->name('addsuratkeluar')
    ->middleware('auth');
Route::post('/insertsuratkeluar', [
    SuratKeluarController::class,
    'insertsuratkeluar',
]);
Route::get('showsuratkeluar/{id}', [
    SuratKeluarController::class,
    'showsuratkeluar',
]);
Route::post('/updatesuratkeluar/{id}', [
    SuratKeluarController::class,
    'updatesuratkeluar',
]);
Route::get('/deletesuratkeluar/{id}', [
    SuratKeluarController::class,
    'deletesuratkeluar',
]);

//routu create letter
Route::get('/createletter', [CreateLetterController::class, 'createletter'])
    ->name('createletter')
    ->middleware('auth');

// pdf reader
// Route::get('/createletter', [PDFController::class, 'generatePDF'])->middleware(
//     'auth'
// );
